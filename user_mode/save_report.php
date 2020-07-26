<?php
session_start();
$today_year = date('Y');
$today_month = date('Y-m');
$today_date = date('Y_m_d');
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
if (isset($_FILES['image'])) {
	$errors = array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$file_path = "";
	$file_ext = strtolower(end(explode('.', $file_name)));
	$expensions = array("jpeg", "jpg", "png");
	if (in_array($file_ext, $expensions) === false) {
		$errors[] = "File format does not required, please choose a JPEG or PNG Immage.";
	}
	if ($file_size < 20480) {
		$errors[] = 'Image size must more than 20kb';
	}
	if (empty($errors) == true) {
		$file_path = "img/reports/$file_name";
		if (!file_exists("../img/reports/$today_date")) {
			mkdir("../img/reports/$today_date", 0777, true);
		}
		move_uploaded_file($file_tmp, "../img/reports/$today_date/$file_name");
		echo "Success";
	} else {
		print_r($errors);
	}
}
$id = 0;
$type = "ANONYMOUS";
$sql = "INSERT INTO $table_reports (user_id, messages, email, type, region_id, district_id, ward_id, incident_area, img_path, date_time, ip) 
    VALUES ('$id', '$message', '$email', '$type', '$region', '$district', '$ward', '$place', '$file_path', '$today_time', '$ip')";
$result = $mysql_obj->query($sql);

if ($result == 1) {
	header("Location: report_next.php");
} else {
	header("Location: index.php");
}
$mysql_obj->close();