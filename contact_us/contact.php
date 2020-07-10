<!DOCTYPE html>
<html>

	<head>
		<title>Contact Us</title>
		<link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico" />
		<meta name="description"
			content="The NPS Crime Stoppers Reporting System helps you report crimes in your local area to your police.">
		<meta name="keywords" content="police, crime, crime report, crimestoppers,">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" href="../css/style.css">
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
							<li><a href="../index.php">Home</a></li>
							<li><a href="../anonymous/anonymous.php">Report</a></li>
							<li><a href="../login.php">Login</a></li>
							<li><a href="../register.php">Register</a></li>
							<li class="selected" style="float: right;"><a href="contact.php"><i class="fa fa-phone"></i>
									Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div id="site_content" class="content">
				<div align="center" class="header">
					<h1>Contact Form</h1>
				</div>
				<div id="content">
					<form action="save_contact.php">
						<div class="form_settings" method="POST">
							<p>
								<span>Full Name:</span>
								<input style="width: 40%;" type="text" id="fname" name="fullname"
									placeholder="Your name.." required>
							</p>
							<p>
								<span>Email:</span>
								<input style="width: 40%;" onchange="ValidateEmail()" type="text" id="email"
									name="email" placeholder="Your email..">
							</p>
							<p>
								<span>Message:</span>
								<textarea id="message" name="message" placeholder="Write something.."
									style="width:38.5%;max-width: 38.5%;max-height:40%;" required></textarea>
							</p>
							<input type="submit" class="submit" value="Submit">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="footer">
			<p>Copyright &copy; Rivine <?php echo date("Y"); ?> </p>
		</div>
		<!-- JAVASCRIPTS -->
		<script type="text/javascript" src="js/_crime.js"></script>
	</body>

</html>