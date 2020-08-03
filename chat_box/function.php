<?php
if (!isset($_SESSION)) {
	session_start();
}
//--------------------------------------------------------------------

$servername = "localhost";
$username = "root";
$password = "";
$database = "crime";
$mysql_obj = new mysqli($servername, $username, $password, $database);
if ($mysql_obj->connect_error) {
	die("connection failed");
}
return $mysql_obj;

//--------------------------------------------------------------------
function dateDifference($date_1, $date_2, $differenceFormat = '%a')
{
	$datetime1 = date_create($date_1);
	$datetime2 = date_create($date_2);
	$interval = date_diff($datetime1, $datetime2);
	return $interval->format($differenceFormat);
}