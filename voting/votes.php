<?php

if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {

include("config.php");


$day = date("Y-m-d H:i:s");
mysql_query("DELETE FROM vote_ip WHERE date_resp < '$day'");

function getAllVotes($id)
	{
	$votes = array();
	$q = "SELECT * FROM entries WHERE id = $id";
	$r = mysql_query($q);
	if(mysql_num_rows($r)==true)	//id найден в таблице
		{
		$row = mysql_fetch_assoc($r);
		$votes[0] = $row['votes'];
		}
	return $votes;
	}

function getEffectiveVotes($id)
	{
	$votes = getAllVotes($id);
	$effectiveVote = $votes[0];
	return $effectiveVote;
	}

$id = $_POST['id'];
$action = $_POST['action'];

//get the current votes
$cur_votes = getAllVotes($id);

/* Добавлено */
// проверяем юзера на IP
$ip = $_SERVER['REMOTE_ADDR'];
$r = mysql_query("SELECT * FROM vote_ip WHERE id_resp = '$id' AND ip = '$ip'");
if(mysql_num_rows($r)==1)
{
echo "ip";
exit;
}
else {
	mysql_query("INSERT INTO vote_ip (id_resp, ip, data_resp) VALUES ('$id', '$ip', '$day')");
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
$r = mysql_query($q);
if($r) 
	{
	$effectiveVote = getEffectiveVotes($id);
	echo $effectiveVote;
	/* Добавлено */
	$date_resp = date("Y-m-d",time()+ 1*60*60*24*30); // запоминаем завтрашнююю дату
	mysql_query("INSERT INTO vote_ip (id_resp, ip, date_resp) VALUES ('$id','$ip','$date_resp')");
	// В таблицу vote_ip заносим id статьи, ip посетителя и завтрашнюю дату-время
	/* конец добавлено */
	
	}
elseif(!$r) //voting failed
	{
	echo "Ошибка!";
	}

/* Добавлено */
}

//else exit("Посторонним вход воспрещен");
else
{
	header("Location: index.php"); exit;
  }
/* Конец добавлено */
?>
