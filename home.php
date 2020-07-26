<!DOCTYPE html>
<html>

<?php include('functions.php') ?>

<head>
	<title>Welcome to the CrimeSTOPPERS</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico" />
	<meta name="description" content="The NPS Crime Stoppers Reporting System helps you report crimes in your local area to your police.">
	<meta name="keywords" content="police, crime, crime report, crimestoppers,">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/button.css" />
</head>

<body>
	<div id="main">
		<div id="header">
			<div id="logo">
				<div class="logo_img">
					<img src="img/logo.png" alt="NPS Logo" height="auto" width="13%"></img>
					<div id="logo_text">
						<h1><a class="logo_colour" href="../index.php">CrimeSTOPPERS</a></h1>
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
			<!-- All Pages Contents go Here -->
			<p>registration successfully</p>
			<p>save detail successfully</p>
			<a href="login.php">login</a>
		</div>

	</div>
	<div id="footer">
		<p>Copyright &copy; Rivine <?php echo date("Y"); ?> All Rights Reserved.</p>
	</div>
	<!-- JAVASCRIPT SCRIPTS -->
	<script type="text/javascript" src="js/_crime.js"></script>
</body>

</html>