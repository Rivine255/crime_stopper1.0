<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "crime";
$table_reports = "tb_reports";
$mysql_obj = new mysqli($servername, $username, $password, $database);
if ($mysql_obj->connect_error) {
	die("connection failed:" . $mysql_obj->connect_error);
}
$regions = "";
$district = "";
$ward = "";
$sql_region = "SELECT * FROM tb_region";
$result_region = $mysql_obj->query($sql_region);
if ($result_region->num_rows > 0) {
	while ($row = $result_region->fetch_assoc()) {
		$region_id = $row['id'];
		$name = $row['name'];
		$regions .= "<option value='$region_id'>$name</option>";
	}
}
$sql_district = "SELECT * FROM tb_district ORDER BY name asc";
$result_district = $mysql_obj->query($sql_district);
if ($result_district->num_rows > 0) {
	while ($row = $result_district->fetch_assoc()) {
		$district_id = $row['id'];
		$name = $row['name'];
		$district .= "<option value='$district_id'>$name</option>";
	}
}
$sql_ward = "SELECT * FROM tb_ward ORDER BY name asc";
$result_ward = $mysql_obj->query($sql_ward);
if ($result_ward->num_rows > 0) {
	while ($row = $result_ward->fetch_assoc()) {
		$ward_id = $row['id'];
		$name = $row['name'];
		$ward .= "<option value='$ward_id'>$name</option>";
	}
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
		<link rel="stylesheet" type="text/css" href="../css/button.css" />
		<script src="https://kit.fontawesome.com/bf523026c9.js" crossorigin="anonymous"></script>
		<link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico" />
	</head>

	<body>
		<div id="main">
			<div id="header">
				<div id="logo">
					<div class="logo_img">
						<img src="../img/logo.png" alt="NPS Logo" height="auto" width="13%"></img>
						<div id="logo_text">
							<h1><a class="logo_colour" href="../index.php">CrimeSTOPPERS</a></h1>
							<h2>National Police Service</h2>
						</div>
					</div>
				</div>
				<nav>
					<ul id="menu">
						<li><a href="../index.php">Home</a></li>
						<li class="selected"><a href="anonymous.php">Report</a></li>
						<li><a href="../login.php">Login</a></li>
						<li><a href="../register.php">Register</a></li>
						<li style="float: right;">
							<a href="../contact_us/contact.php"><i class="fa fa-phone"></i> Contact Us</a>
						</li>
					</ul>
				</nav>
			</div>
			<div id="site_content" class="content">
				<div align="center" class="header">
					<h1>Anonymous Report</h1>
				</div>
				<div id="content">
					<h4>
						<?php
					$time = date("H");
					if (($time <= 11) and ($time >= 5)) {
						echo 'Good Morning and welcome!';
					} elseif (($time <= 16) and ($time >= 12)) {
						echo "Good Afternoon and welcome!";
					} elseif (($time <= 20) and ($time >= 17)) {
						echo "Good Evening and welcome!";
					} else {
						echo "Good Evening and welcome!";
					} ?>
					</h4>
					<p>Have you witnessed a crime? Are you a victim of a crime? Let us know!
						<b>Help us protect and serve you!</b></p>
					<form action="save_anonymous.php" method="POST" enctype="multipart/form-data">
						<div class="form_settings">
							<p>
								<p>Incident Place:</p>
								<select name="region_id" onchange="show_district()">
									<option value="">-- Region --</option>
									<?php echo $regions; ?>
								</select>
								<select name="district_id" id="district">
									<option value="">-- District --</option>
									<?php echo $district; ?>
								</select>
								<select name="ward_id" id="ward">
									<option value="">-- Ward --</option>
									<?php echo $ward; ?>
								</select>
							</p>
							<p>
								<p>Incident Area:</p>
								<input style="width: 97%;" class="contact" required
									placeholder="eg. Shopping center, School, Hotel, etc." type="text" name="place" />
							</p>
							<p>
								<p>Email Address:</p>
								<input style="width: 97%;" class="contact" placeholder="Optional" type="email"
									name="email" />
							</p>
							<p>
								<p>Message:</p>
								<textarea required
									style="max-width: 97%; min-width: 97%; min-height: 100px; margin: 0px;"
									class="contact textarea" placeholder="Tell us what happened" rows="8" cols="50"
									name="message" id="message"></textarea>
							</p>
							<p>
								<p>Incident image:</p>
								<input type="file" id="file" onchange="check_size()" name="file" />
								<div id="wait">You can drag your file in the box above.</div>
							</p>
							<p class="form_buttons" style="padding-top: 15px">
								<input class="submit" id="btn" type="submit" value="submit">
								<button type="reset" class="submit">RESET</button>
							</p>
						</div>
					</form>
					<div align="center">
						<p><br>Thank you for keeping our community safe.<br>
							Your report will be investigated swiftly!</p>
					</div>
				</div>
			</div>
			<div id="footer">
				<p>Copyright &copy; Rivine <?php echo date("Y"); ?> All Rights Reserved.</p>
			</div>
			<!-- JAVASCRIPTS -->
			<script type="text/javascript" src="../js/_crime.js"></script>
	</body>

</html>