<?php
session_start();
$id = $_SESSION['user']['id'];
$username = $_SESSION['user']['username'];
?>
<!DOCTYPE HTML>
<html>

	<head>
		<title>Home - <?php echo $username; ?></title>
		<meta name="description" content="website description" />
		<meta name="keywords" content="website keywords, website keywords" />
		<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="../css/button.css" />
		<link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico" />
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
							<li class="selected"><a href="home.php">Home</a></li>
							<li><a href="report.php">Report</a></li>
							<li style="float: right;"><a href="../contact.php">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div id="site_content" class="content">
				<div align="center" class="header">
					<h1>Home</h1>
				</div>
				<div id="wait"></div>
				<div id="content">
					<h4>
						<?php
					$time = date("H");
					if (($time <= 11) and ($time >= 5)) {
						echo "Good Morning $username,";
					} elseif (($time <= 16) and ($time >= 12)) {
						echo "Good Afternoon $username,";
					} elseif (($time <= 20) and ($time >= 17)) {
						echo "Good Evening $username,";
					} else {
						echo "Good night $username,";
					} ?>
					</h4>

				</div>
			</div>
			<div id="footer">
				<a href="../login.php" id="logout">logout</a>
				<br><br>
				<p>Copyright &copy; Rivine <?php echo date("Y"); ?> All Rights Reserved.</p>
			</div>
			<!-- JAVASCRIPTS -->
			<script type="text/javascript" src="js/ajax.js"></script>
			<script type="text/javascript" src="js/_crime.js"></script>
	</body>

</html>