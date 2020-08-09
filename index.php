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
							<h1><a class="logo_colour" href="index.php">CrimeSTOPPERS</a></h1>
							<h2>National Police Service</h2>
						</div>
					</div>
				</div>
			</div>
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

			<!-- Pages Content -->
			<div class="content">
				<div class="slideshow-container">
					<div class="slide">
						<img class="img_slide" src="img/woman_police.jpg" style="width:100%">
						<div class="text">Welcome to CrimeStoppers! Don't have an account?
							<a href="register.php" class="slide_link">REGISTER AN ACCOUNT FOR FREE</a>
						</div>
					</div>
					<div class="slide">
						<img class="img_slide" src="img/man_police.jpg" style="width:100%">
						<div class="text">Did you witness a crime? Are you a victim of a crime?
							<a href="anonymous/anonymous.php" class="slide_link">REPORT THE CRIME YOU SAW</a></div>
					</div>
					<div class="slide">
						<img class="img_slide" src="img/police_band.jpg" style="width:100%">
						<div class="text">Have an account?
							<a href="login.php" class="slide_link">LOGIN TO CRIMESTOPPERS</a>
						</div>
					</div>
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>

				</div>

				<div id="site_content" class="content">
					<div align="center" class="header">
						<h1>INTRODUCING CRIMESTOPPERS</h1>
					</div>
					<div id="wait"></div>
					<div id="content">
						<h4>Protecting and Serving</h4>
						<p>CrimeSTOPPERS helps protect your community.</p>
						<h4>Location and Time?</h4>
						<p>Report crimes in your neighbourhood anywhere, 
						any time.</p>
						<h4>Instantaneous Response</h4>
						<p>Get instant, realtime updates to your reports.
						</p>
						<b>It's Justice, a click away!</b>
					</div>
				</div>
			</div>
		</div>

		<div id="footer">
			<p>Copyright &copy; Rivine <?php echo date("Y"); ?> All Rights Reserved.</p>
		</div>
		<!-- JAVASCRIPTS -->
		<script type="text/javascript" src="js/ajax.js"></script>
		<script type="text/javascript" src="js/_crime.js"></script>
		<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("slide");
			if (n > slides.length) {
				slideIndex = 1;
			}
			if (n < 1) {
				slideIndex = slides.length;
			}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none"
			}
			slides[slideIndex - 1].style.display = "block";
		}
		</script>
	</body>

</html>