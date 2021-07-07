<?php
 include('../functions.php'); 

 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
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
			</div>
				<div id="navbar">
					<nav>
						<ul id="menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="anonymous/anonymous.php">Report</a></li>
							<li class="selected"><a href="login.php">Login</a></li>
							<li><a href="register.php">Register</a></li>
							<li style="float: right;"><a href="contact_us/contact.php"><i class="fa fa-phone"></i>
									Contact Us</a></li>
						</ul>
					</nav>
				</div>
            </div>
			<section class="login_form">
			   
				<form method="post" action="reset-password.php">
				    <figure>
						<img src="./../img/login_avatar.png" alt="Avatar" class="avatar">
					</figure>
					<?php 
					
					echo display_error(); ?>
					<section class="inputs">
					<label for="email">email</label>
                        <input type="email" name="email" placeholder="email"  required>
						<label for="password_1">Password</label>
						<input type="password" name="password_1" required>
						<label for="password_2">Confirm password</label>
						<input type="password" name="password_2" required>
						
					</section>
					<button type="submit" class="btn" name="reset">reset</button>
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