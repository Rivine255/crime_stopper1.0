<?php
session_start();
$id = $_SESSION['user']['id'];
$user_username = $_SESSION['user']['username'];
$email = $_SESSION['user']['email'];
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

$fullname = $user_username;
$message = $mysql_obj->real_escape_string($_REQUEST['message']);

$sql = "INSERT INTO contact_us (fullname, user_id, email, subject, ip) VALUES ('$fullname', '$id', '$email', '$message', '$ip')";
$result = $mysql_obj->query($sql);

if ($result == 1) {
	header("Location: contact_next.php");
} else {
	header("Location: ../index.php");
}
$mysql_obj->close();