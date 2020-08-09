<!DOCTYPE html>
<html>

<?php include('functions.php') ?>

<head>
	<title>Registration Successful!</title>
	<meta http-equiv="refresh" content="2; url=login.php" />
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico" />
	<meta name="description" content="The NPS Crime Stoppers Reporting System helps you report crimes in your local area to your police.">
	<meta name="keywords" content="police, crime, crime report, crimestoppers,">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/button.css" />
	<script src="https://kit.fontawesome.com/bf523026c9.js" crossorigin="anonymous"></script>
</head>

<body>
	<div id="main">
		<div id="header">
			<div id="logo">
				<div class="logo_img">
					<img src="img/logo.png" alt="NPS Logo" height="auto" width="13%"></img>
					<div id="logo_text">
						<h1><a class="logo_colour" href="home.php">CrimeSTOPPERS</a></h1>
						<h2>National Police Service</h2>
					</div>
				</div>
			</div>
			<nav>
				<ul id="menu">
					<li class="selected"><a href="index.php">Home</a></li>
					<li><a href="anonymous/anonymous.php">Report</a></li>
					<li><a href="login.php">Login</a></li>
					<li style="float: right;"><a href="contact_us/contact.php"><i class="fa fa-phone"></i> Contact
							Us</a></li>
				</ul>
			</nav>
		</div>
		<div id="site_content" class="content">
			<div align="center" class="header">
				<h1>You have been registered!</h1>
			</div>
			<div align="center" id="content">
				<p >Now that you are a part of the system, please log in with the credentials you registered with.</p>
				<a href="login.php">Redirecting you now. Click here if you're still here!</a>
			</div>
		</div>

	</div>
	<div id="footer">
		<p>Copyright &copy; Rivine <?php echo date("Y"); ?> All Rights Reserved.</p>
	</div>
	<!-- JAVASCRIPT SCRIPTS -->
	<script type="text/javascript" src="js/_crime.js"></script>
</body>

</html>