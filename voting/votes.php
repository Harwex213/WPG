<?php
include("config.php");
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') 
{
	
	$day = date("Y-m-d H:i:s");
	
	$mysqli->query("DELETE FROM vote_ip WHERE date_resp < '$day'");

	$query = 'SELECT * FROM entries WHERE id';
	$result = mysqli_query($mysqli, $query);
	$row = mysqli_fetch_assoc($result);
	echo $day;
	echo $row['id'];
	echo $row['ip'];
}
?>