<?php
include("config.php");
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') 
{
	
	$day = date("Y-m-d H:i:s");
	$mysqli->query("DELETE FROM vote_ip WHERE date_resp < '$day'");
	$query = 'SELECT * FROM entries WHERE id';
	$id = $_POST['id'];


	public class Votes{
		private
			$row = $mysqli->query("SELECT votes FROM entries WHERE id = '$id'");
		public
	}
}
?>