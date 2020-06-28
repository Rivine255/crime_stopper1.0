<?php 
	include('../functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../../login.php');
	}

?>
<!DOCTYPE html>
<html>
<head><title>CrimeSTOPPERS Admin</title>
    <link rel="shortcut icon" type="image/x-icon" href="../css/logo.ico" />
    <meta name="description" content="CrimeStoppers Admin Page.">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<header>
		<div class="logo">
			<div class="logo_img">
				<img src="../img/logo.png" alt="NPS Logo" height="auto" width="13%"></img>
			</div>
			<div class="logo_text">
				<h1><a class="logo_colour" href="../index.php">CrimeSTOPPERS</a></h1>
				<h2>National Police Service</h2>
			</div>
		</div>

		<!-- logged in user information -->
		<div class="profile_info">
			<figure class="user_avatar"><img src="../images/admin_profile.png" width="5%" ></figure>
			<div class="user_info">
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="../login.php" style="color: red;">logout</a>
						&nbsp; <a href="create_user.php"> + add user</a>
					</small>

				<?php endif ?>
			</div>
		</div>

		<nav>
			<ul id="menu">
				<li class="selected"><a href="../index.php">Home</a></li>
                <li><a href="../anonymous/anonymous.php">Report</a></li>
                <li><a href="../login.php">Login</a></li>
                <li><a href="#">Register</a></li>
				<li style="float: right;"><a href="#">Contact Us</a></li>
			</ul>
		</nav>
	</header>

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
	</div>
</body>
</html>