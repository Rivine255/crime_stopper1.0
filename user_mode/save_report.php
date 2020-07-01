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
$table_reports = "tb_reports";
$mysql_obj = new mysqli($servername, $username, $password, $database);
if ($mysql_obj->connect_error) {
	die("connection failed:" . $mysql_obj->connect_error);
}

$region = $mysql_obj->real_escape_string($_REQUEST['region_id']);
$district = $mysql_obj->real_escape_string($_REQUEST['district_id']);
$ward = $mysql_obj->real_escape_string($_REQUEST['ward_id']);
$place = $mysql_obj->real_escape_string($_REQUEST['place']);
$email = $mysql_obj->real_escape_string($_REQUEST['email']);
$message = $mysql_obj->real_escape_string($_REQUEST['message']);
$id = 0;
$type = "ANONYMOUS";

$sql = "INSERT INTO $table_reports (user_id, messages, email, type, region_id, district_id, ward_id, incident_area, date_time, ip) 
    VALUES ('$id', '$message', '$email', '$type', '$region', '$district', '$ward', '$place', '$today_time', '$ip')";
$result = $mysql_obj->query($sql);

if ($result == 1){
	header("Location: anonymous_next.php");
}else {
	header("Location: index.php");
}
$mysql_obj->close();