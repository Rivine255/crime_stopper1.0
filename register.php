<?php include('functions.php') ?>
<!DOCTYPE html>
<html>

	<head>
		<title>Register a new account</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico" />
		<meta name="description"
			content="The NPS Crime Stoppers Reporting System helps you report crimes in your local area to your police.">
		<meta name="keywords" content="police, crime, crime report, crimestoppers,">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
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
							<li><a href="login.php">Login</a></li>
							<li class="selected"><a href="register.php">Register</a></li>
							<li style="float: right;"><a href="contact_us/contact.php"><i class="fa fa-phone"></i>
									Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<section class="login_form">
				<form method="post" action="register.php">
					<?php echo display_error(); ?>
					<section class="inputs">
						<label for="username">Username</label>
						<input type="text" name="username" value="<?php echo $username; ?>" required>
						<label for="email">Email</label>
						<input type="email" name="email" placeholder="email@domain.com" value="<?php echo $email; ?>"
							required>
						<label for="password_1">Password</label>
						<input type="password" name="password_1" required>
						<label for="password_2">Confirm password</label>
						<input type="password" name="password_2" required>
						<span><a class="register" href="login.php">Login Instead</a></span>
					</section>
					<button type="submit" class="btn" name="register_btn">Register</button>
				</form>
			</section>
		</div>
		<div id="footer">
			<p>Copyright &copy; Rivine <?php echo date("Y"); ?>  All Rights Reserved.</p>
		</div>
		<!-- JAVASCRIPTS -->
		<script type="text/javascript" src="js/_crime.js"></script>
	</body>

</html>