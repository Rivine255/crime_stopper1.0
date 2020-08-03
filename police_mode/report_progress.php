<?php
session_start();
$id = $_SESSION['user']['id'];
$username = $_SESSION['user']['username'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "crime";
$success = "";
$mysql_obj = new mysqli($servername, $username, $password, $database);
if ($mysql_obj->connect_error) {
	die("connection failed:" . $mysql_obj->connect_error);
}
$report_id = $mysql_obj->real_escape_string($_REQUEST['report_id']);
$progress = $mysql_obj->real_escape_string($_REQUEST['progress']);
$sql = "UPDATE tb_reports SET progress='$progress' WHERE id='$report_id'";
$results = $mysql_obj->query($sql);
if ($results == true) {
	$success = "<h2>Further Steps to Take place!!</h2>
	<p>Changes have been take place successful!!</p>
	<a href='home.php' class='btn-success'><i class='fa fa-check'></i>&nbsp;HOME</a>";
} else {
	$success = "<h2>Oops!!</h2>
	<p>Please Contact System Adminstration!!
	<a href='home.php' class='btn-danger'><i class='fa fa-check'></i>&nbsp;HOME</a>";
}
?>
<!DOCTYPE html>
<html>

	<head>
		<title>Report</title>
		<meta name="description" content="website description" />
		<meta name="keywords" content="website keywords, website keywords" />
		<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
		<link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
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
				<div class="profile_info">
					<figure class="user_avatar"><img src="../img/admin_profile.png" width="5%">
						<span style="float: right;">
							<a href="../chat_box/chat_list.php"><i class="fa fa-2x fa-envelope"></i></a>
						</span>
					</figure>
					<div class="user_info">
						<?php if (isset($_SESSION['user'])) : ?>
						<strong><?php echo $_SESSION['user']['username']; ?></strong>
						<small style="font-size:15px">
							<i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
							&nbsp;
						</small>
						<?php endif ?>
					</div>
				</div>
				<div id="navbar">
					<nav>
						<ul id="menu">
							<li><a href="home.php">Home</a></li>
							<li class="selected"><a href="report.php">Report</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div id="site_content">
				<div align="center" class="header">
					<h1>Report Progress</h1>
				</div>
				<div id="content">
					<?php echo $success; ?>
				</div>
			</div>
			<div id="footer">
				<a href="../login.php" style="color: red;">logout</a>
				<br><br>
				<p>Copyright &copy; Rivine <?php echo date("Y"); ?> All Rights Reserved.</p>
			</div>
			<p>&nbsp;</p>
		</div>
		<!-- JAVASCRIPTS -->
		<script type="text/javascript" src="../js/_crime.js"></script>
	</body>

</html>