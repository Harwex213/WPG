<?php

if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') 
{
	include("config.php");

	$day = date("Y-m-d H:i:s");
	
	$mysqli->query("DELETE FROM vote_ip WHERE date_resp < '$day'");

	function getAllVotes($id)
	{
		$votes = array();
		global $mysqli;
		$r = $mysqli->query("SELECT votes FROM entries WHERE id = '$id'");
		if(mysqli_num_rows($r)==1)//id наден в таблице
		{
			$row = mysqli_fetch_assoc($r);
			$votes[0] = $row['votes'];
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
		echo "<script>$('.container_' + the_id).html('<span class='voted'>&#10004</span>')</script>";
	exit;
	}
	if($action=='vote_up') //voting up
	{
		$votes = $cur_votes[0]+1;
		$q = "UPDATE entries SET votes = $votes WHERE id = $id";
	}
	elseif($action=='vote_down') //voting down
	{
		$votes = $cur_votes[0]-1;
		$q = "UPDATE entries SET votes = $votes WHERE id = $id";
	}
	$r = $mysqli->query($q);

	if($r)
	{
		$effectiveVote = getEffectiveVotes($id);
		echo $effectiveVote;
		$date_resp = date("Y-m-d",time()+ 2592000); // запоминаем завтрашнююю дату
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
