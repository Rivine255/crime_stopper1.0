<?php include('functions.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Log In</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico" />
	<meta name="description"
		content="The NPS Crime Stoppers Reporting System helps you report crimes in your local area to your police.">
	<meta name="keywords" content="police, crime, crime report, crimestoppers,">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/button.css" />
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
						<li><a href="index.php">Home</a></li>
						<li><a href="anonymous/anonymous.php">Report</a></li>
						<li class="selected"><a href="login.php">Login</a></li>
						<li><a href="register.php">Register</a></li>
						<li style="float: right;"><a href="contact.php">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<section class="login_form">
			<form action="login.php" method="post">
				<figure>
					<img src="img/login_avatar.png" alt="Avatar" class="avatar">
				</figure>
				<section class="inputs">
					<label for="username">Username</label>
					<input type="text" name="username" placeholder="Enter Username" required>

					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Enter Password" required>
					<span><a class="register" href="anonymous/anonymous.php">I don't have an account</a></span>
				</section>
				<button type="submit" name="login_btn">Login</button>
			</form>
		</section>
	</div>
	<div id="footer">
		<p>Copyright &copy; Rivine <?php echo date("Y");?> </p>
	</div>
	<!-- JAVASCRIPTS -->
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/_crime.js"></script>
</body>

</html>