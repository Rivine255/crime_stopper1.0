<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>

	<head>
		<title>Registration system PHP and MySQL - Create user</title>
		<meta name="description" content="website description" />
		<meta name="keywords" content="website keywords, website keywords" />
		<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="../css/button.css" />
		<link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico" />
		<style>
		button[name=register_btn] {
			background: #003366;
		}
		</style>
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
							<li class="selected"><a href="home.php">Home</a></li>
							<li style="float: right;"><a href="#">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div id="site_content" class="content">
				<div align="center" class="header">
					<h1>New User</h1>
				</div>
				<form method="post" action="create_user.php">
					<?php echo display_error(); ?>
					<div class="input-group">
						<label>Username</label>
						<input type="text" name="username" value="<?php echo $username; ?>">
					</div>
					<div class="input-group">
						<label>Email</label>
						<input type="email" name="email" value="<?php echo $email; ?>">
					</div>
					<div class="input-group">
						<label>User type</label>
						<select name="user_type" id="user_type">
							<option value=""></option>
							<option value="admin">Admin</option>
							<option value="user">User</option>
						</select>
					</div>
					<div class="input-group">
						<label>Password</label>
						<input type="password" name="password_1">
					</div>
					<div class="input-group">
						<label>Confirm password</label>
						<input type="password" name="password_2">
					</div>
					<div class="input-group">
						<button type="submit" class="btn" name="register_btn"> + Create user</button>
					</div>
				</form>
			</div>
			<div id="footer">
				<a href="../login.php" style="color: red;">logout</a>
				<br><br>
				<p>Copyright &copy; Rivine <?php echo date("Y"); ?> </p>
			</div>
		</div>
	</body>

</html>