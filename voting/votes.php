<?php

if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') 
{
	include("config.php");

	$day = date("Y-m-d H:i:s");
	//проверка не вышла ли блокировка ip по времени
	$mysqli->query("DELETE FROM vote_ip WHERE date_resp < '$day'");

	function getAllVotes($id)
	{
		$votes = array();
		$r = $mysqli->query('SELECT * FROM entries WHERE id = $id');
		if(mysqli_num_rows($r)==1)//id наден в таблице
		{
			$row = mysqli_fetch_assoc($r);
			$votes[0] = $row['votes_up'];
			$votes[1] = $row['votes_down'];
		}
		return $votes;
	}

	function getEffectiveVotes($id)
	{
		$votes = getAllVotes($id);
		$effectiveVote = $votes[0] - $votes[1];
		return $effectiveVote;
	}

	$id = $_POST['id'];
	$action = $_POST['action'];

	$cur_votes = getAllVotes($id);

	$ip = $_SERVER['REMOTE_ADDR'];
	$r = $mysqli->query("SELECT * FROM vote_ip WHERE id_resp = '$id' AND ip = '$ip'");

	if(mysqli_num_rows($r)==1)
	{
		echo getEffectiveVotes($id).' голосов(а). <span style="color:red">Ваш голос не учтен. С вашего ip - '.$ip.' голосование проходило. Повторно проголосовать вы сможете завтра</span>';
	exit;
	}
	else {
    	$mysqli->query("INSERT INTO vote_ip (id_resp, ip, data_resp) VALUES ('$id', '$ip', '$day')");
	}

	if($action=='vote_up') //voting up
	{
		$votes_up = $cur_votes[0]+1;
		$q = "UPDATE entries SET votes_up = $votes_up WHERE id = $id";
	}
	elseif($action=='vote_down') //voting down
	{
		$votes_down = $cur_votes[1]+1;
		$q = "UPDATE entries SET votes_down = $votes_down WHERE id = $id";
	}
	$r = $mysqli->query($q);

	if($r) 
	{
		$effectiveVote = getEffectiveVotes($id);
		echo $effectiveVote." голосов(а)";
		$date_resp = date("Y-m-d",time()+ 1*60*60*24); // запоминаем завтрашнююю дату
		$mysqli->query("INSERT INTO vote_ip (id_resp, ip, date_resp) VALUES ('$id','$ip','$date_resp')");
	}
	elseif(!$r) //voting failed
	{
	echo "Ошибка!";
	}
}
else
{
	header("Location: index.php"); exit;
}
?>
