<?php
session_start();
$today_year = date('Y');
$today_month = date('Y-m');
$today_date = date('Y-m-d');
$today_time = date('Y-m-d H:i:s');
$ip =  getenv('HTTP_CLIENT_IP') ?: getenv('HTTP_X_FORWARDED_FOR') ?: getenv('HTTP_X_FORWARDED') ?:
	getenv('HTTP_FORWARDED_FOR') ?: getenv('HTTP_FORWARDED') ?: getenv('REMOTE_ADDR');
//database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "crime";
$mysql_obj = new mysqli($servername, $username, $password, $database);
if ($mysql_obj->connect_error) {
	die("connection failed");
}

$fullname = $mysql_obj->real_escape_string($_REQUEST['fullname']);
$email = $mysql_obj->real_escape_string($_REQUEST['email']);
$message = $mysql_obj->real_escape_string($_REQUEST['message']);

$sql = "INSERT INTO contact_us (fullname, email, subject) VALUES ('$fullname', '$email', '$message')";
$result = $mysql_obj->query($sql);

if ($result == 1) {
	header("Location: contact_next.php");
} else {
	header("Location: ../index.php");
}
$mysql_obj->close();