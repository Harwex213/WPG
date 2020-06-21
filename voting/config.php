<?php
/*данные для входа в MySQLi*/
$hostname = 'WPG';
$db_username = 'root';
$db_password = 'root';
$db_name = 'wpi';
/***************************/

//обработка ошибок реализованная в php7
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//подключение к БД
$mysqli = new mysqli($hostname, $db_username, $db_password,$db_name) ;
?>