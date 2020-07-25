<?php
session_start();
$id = $_SESSION['user']['id'];
$username = $_SESSION['user']['username'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "crime";
$table_reports = "tb_reports";
$mysql_obj = new mysqli($servername, $username, $password, $database);
if ($mysql_obj->connect_error) {
	die("connection failed:" . $mysql_obj->connect_error);
}
$report_id = $_REQUEST['id'];
$sql = "SELECT * FROM tb_reports WHERE id=$report_id";
$results = $mysql_obj->query($sql);
$row = $results->fetch_assoc();
$id = $row['id'];
$messages = $row['messages'];
$email = $row['email'];
$type = $row['type'];
$region_id = $row['region_id'];
$district_id = $row['district_id'];
$ward_id = $row['ward_id'];
$progress = $row['progress'];
$incident_area = $row['incident_area'];
$date_time = $row['date_time'];
$sql_region = "SELECT name FROM tb_region WHERE id='$region_id'";
$result_region = $mysql_obj->query($sql_region);
while ($row = $result_region->fetch_assoc()) {
	$region_name = $row['name'];
}
$sql_district = "SELECT * FROM tb_district WHERE id='$district_id'";
$result_district = $mysql_obj->query($sql_district);
while ($row = $result_district->fetch_assoc()) {
	$district_name = $row['name'];
}
$sql_ward = "SELECT * FROM tb_ward WHERE id='$ward_id'";
$result_ward = $mysql_obj->query($sql_ward);
while ($row = $result_ward->fetch_assoc()) {
	$ward_name = $row['name'];
}
?>

<!DOCTYPE HTML>
<html>

	<head>
		<title>Anonymous Report</title>
		<meta name="description" content="website description" />
		<meta name="keywords" content="website keywords, website keywords" />
		<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="../css/button.css" />
	</head>

	<body>
		<div id="main">
			<div id="header">
				<div id="logo">
					<div class="logo_img">
						<img src="../img/logo.png" alt="NPS Logo" height="auto" width="13%"></img>
						<div id="logo_text">
							<!-- class="logo_colour", allows you to change the colour of the text -->
							<h1><a class="logo_colour" href="../index.php">CrimeSTOPPERS</a></h1>
							<h2>National Police Service</h2>
						</div>
					</div>
				</div>
				<div id="navbar">
					<nav>
						<ul id="menu">
							<li><a href="home.php">Home</a></li>
							<li class="selected"><a href="report.php">Report</a></li>
							<li style="float: right;"><a href="../contact.php">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div id="site_content">
				<div align="center" class="header">
					<h1>Report Details</h1>
				</div>
				<div id="content">
					<div id="wait" align="center" style="color: red;"></div>
					<div align="center" id="wait" style="color: red;"></div>
					<table class="form" style="width:60%">
						<tr>
							<td>Message</td>
							<td>:</td>
							<td><strong><?php echo $messages; ?></strong></td>
						</tr>
						<tr>
							<td>Type</td>
							<td>:</td>
							<td><strong><?php echo $type; ?></strong></td>
						</tr>
						<tr>
							<td>Area of Incidence</td>
							<td>:</td>
							<td><strong><?php echo $incident_area; ?></strong></td>
						</tr>
						<tr>
							<td>Location</td>
							<td>:</td>
							<td><strong><?php echo "$ward_name, $district_name - $region_name"; ?></strong></td>
						</tr>
						<tr>
							<td>Date & time</td>
							<td>:</td>
							<td><strong><?php echo $date_time; ?></strong></td>
						</tr>
						<tr>
							<form action="report_progress.php?id=<?php echo $report_id; ?>">
								<td>Progress</td>
								<td>:</td>
								<td>
									<input type="hidden" name="report_id" value="<?php echo $report_id ?>">
									<select id="select" name="progress">
										<option value="<?php echo $progress ?>">--choose Progress--</option>
										<option value="NOT YET">Not yet done</option>
										<option value="ON PROGRESS">On progress</option>
										<option value="ACCOMPLISHED">Accomplished</option>
									</select>
								</td>
								<td><input type="submit" onmouseover="validate_progress()" class="submit"
										value="submit">
								</td>
							</form>
						</tr>
					</table>
				</div>
			</div>
			<div id="footer">
				<a href="../login.php" style="color: red;">logout</a>
				<br><br>
				<p>Copyright &copy; Rivine <?php echo date("Y"); ?> All Rights Reserved.</p>
			</div>
		</div>
		<!-- JAVASCRIPTS -->
		<script type="text/javascript" src="../js/_crime.js"></script>
	</body>

</html>