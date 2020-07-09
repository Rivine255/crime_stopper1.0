<?php 
session_start();
include('functions.php') 

?>
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
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/button.css" />
	<link rel="shortcut icon" type="image/png" href="../img/favicon.png">
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
						
						<li><a href="anonymous/anonymous.php">Report</a></li>
						
						<li style="float: right;"><a href="contact.php">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="site_content" class="content">
			<!-- All Pages Contents Will gone Here -->
				<div class="header">
		<h2>user profile</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="img/login_avatar.png" width="100" height="100"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<h1>username:<strong><?php echo $_SESSION['user']['username']; ?></strong></h1>
					<h1>email:<strong><?php echo $_SESSION['user']['email']; ?></strong></h1>

					<small>
						<i  style="color: #888;"></i> 
						<br>
						<a href="login.php" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
		</div>
	</div>
	<div id="footer">
		<p>Copyright &copy; Rivine <?php echo date("Y");?> </p>
	</div>
	<!-- JAVASCRIPTS -->
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/_crime.js"></script>
</body>

</html>