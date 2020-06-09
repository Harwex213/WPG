<?php
$hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";

$link = mysql_connect($hostname, $db_username, $db_password) or die("Cannot connect to the database");
mysql_select_db("phpmyadmin") or die("Cannot select the database");
?>