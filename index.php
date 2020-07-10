<!DOCTYPE html>
<html>

	<head>
		<title>Welcome to the CrimeSTOPPERS</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico" />
		<meta name="description"
			content="The NPS Crime Stoppers Reporting System helps you report crimes in your local area to your police.">
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
							<!-- class="logo_colour", allows you to change the colour of the text -->
							<h1><a class="logo_colour" href="../index.php">CrimeSTOPPERS</a></h1>
							<h2>National Police Service</h2>
						</div>
					</div>
				</div>
				<div id="navbar">
					<nav>
						<ul id="menu">
							<li class="selected"><a href="index.php">Home</a></li>
							<li><a href="anonymous/anonymous.php">Report</a></li>
							<li><a href="login.php">Login</a></li>
							<li><a href="register.php">Register</a></li>
							<li style="float: right;"><a href="contact_us/contact.php"><i class="fa fa-phone"></i>
									Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<!-- All Pages Contents Will gone Here -->

			<br><br><br>
			<div class="container">
				<div class="slideshow-container">
					<div class="mySlides fade">
						<img src="img/2.jpg" style="width:100%" width="301" height="167">
						<div class="text"></div>
					</div>
					<div class="mySlides fade">
						<img src="img/3.jpg" style="width:100%" width="301" height="167">
						<div class="text"></div>
					</div>
					<div class="mySlides fade">
						<img src="img/4.jpg" style="width:100%" width="301" height="167">
						<div class="text"></div>
					</div>
					<div class="mySlides fade">
						<img src="img/1.JPG" style="width:100%">
						<div class="text">IGP-SIMON SIRRO</div>
					</div>
					<div class="mySlides fade">
						<img src="img/6.jpg" style="width:100%" width="301" height="167">
						<div class="text"></div>
					</div>
					<div class="mySlides fade">
						<img src="img/7.jpg" style="width:100%" width="301" height="167">
						<div class="text"></div>
					</div>
				</div>
				<br>
				<div class="dot1" style="text-align:center">
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
				</div>
			</div>
		</div>
		<br><br><br>
		<div id="footer">
			<p>Copyright &copy; Rivine <?php echo date("Y"); ?> </p>
		</div>
		<!-- JAVASCRIPTS -->
		<script type="text/javascript" src="js/ajax.js"></script>
		<script type="text/javascript" src="js/_crime.js"></script>
		<script>
		showSlides();
		</script>
	</body>

</html>