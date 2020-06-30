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
	<link rel="stylesheet" type="text/css" href="../css/style_.css" />
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/button.css" />
	<link rel="shortcut icon" type="image/png" href="../img/favicon.png">
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
						<li><a href="../index.php">Home</a></li>
						<li class="selected"><a href="anonymous.php">Report</a></li>
						<li><a href="../login.php">Login</a></li>
						<li><a href="../register.php">Register</a></li>
						<li style="float: right;"><a href="../contact.php">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="site_content" class="content">
			<div align="center" class="header">
				<h1>Anonymous Report</h1>
			</div>
			<div id="wait"></div>
			<div id="content">
				<h4>
					<?php
          $time = date("H");
    if (($time <= 11) and ($time >= 5)) {
        echo 'Good Morning citizen,';
    } elseif (($time <= 16) and ($time >= 12)) {
        echo "Good Afternoon citizen,";
    } elseif (($time <= 20) and ($time >= 17)) {
        echo "Good Evening citizen,";
    } else {
        echo "Good night citizen,";
    } ?>
				</h4>
				<p>Please notifying Us by Filling this Form. We granted Your Security.
					<b>So you have nothing to worry!</b></p>
				<form action="save_anonymous.php" method="POST">
					<div class="form_settings">
						<p>
							<span>Incident Place:</span>
							<select name="region_id" onchange="show_district()">
								<option value="">-- Region --</option>
								<?php echo $regions;?>
							</select>
							<select name="district_id" id="district">
								<option value="">-- District --</option>
								<?php echo $district; ?>
							</select>
							<select name="ward_id" id="ward">
								<option value="">-- Ward --</option>
								<?php echo $ward;?>
							</select>
						</p>
						<p>
							<span>Incident Area:</span>
							<input style="width: 40%;" class="contact"
								placeholder="eg. shopping center, school, hotel, etc." type="text" name="place" />
						</p>
						<p>
							<span>Email Address:</span>
							<input style="width: 40%;" class="contact" placeholder="Your email(Optional)" type="email"
								name="email" />
						</p>
						<p>
							<span>Message:</span>
							<textarea required style="max-width: 38.5%;min-height:20%;" class="contact textarea"
								placeholder="Tell us what happening / happened" rows="8" cols="50" name="message"
								id="message"></textarea>
						</p>
						<p style="padding-top: 15px">
							<input class="submit" onclick="submit()" type="submit" value="submit">
						</p>
					</div>
				</form>
				<div align="center">
					<p><br>Special thanks to You. For Your faithfully Support.<br>
						Further Steps will take place Immediately</p>
				</div>
			</div>
		</div>
		<div id="content_footer"></div>
		<div id="footer">
			<p>Copyright &copy; Rivine <?php echo date("Y");?> </p>
		</div>
		<!-- JAVASCRIPTS -->
		<script type="text/javascript" src="js/ajax.js"></script>
		<script type="text/javascript" src="js/_crime.js"></script>
</body>

</html>