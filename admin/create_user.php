<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Create a new user</title>
	<meta name="description" content="website description" />
	<meta name="keywords" content="website keywords, website keywords" />
	<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
	<link rel="stylesheet" type="text/css" href="../css/style.css" <link rel="stylesheet" type="text/css" href="../css/button.css" />
	<link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico" />
	<script src="https://kit.fontawesome.com/bf523026c9.js" crossorigin="anonymous"></script>
</head>

<body>
	<div id="main">
		<div id="header">
			<div id="logo">
				<div class="logo_img">
					<img src="../img/logo.png" alt="NPS Logo" height="auto" width="13%"></img>
					<div id="logo_text">
						<h1><a class="logo_colour" href="../index.php">CrimeSTOPPERS</a></h1>
						<h2>National Police Service</h2>
					</div>
				</div>
			</div>

			<div class="profile_info">
				<figure class="user_avatar"><img src="../img/admin_profile.png" width="5%">
					<span style="float: right;">
						<a href="../chat_box/chat_list.php"><i class="fa fa-envelope"></i></a>
					</span>
				</figure>
				<div class="user_info">
					<?php if (isset($_SESSION['user'])) : ?>
						<strong><?php echo $_SESSION['user']['username']; ?></strong>
						<small style="font-size:15px">
							<i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
							&nbsp;
						</small>
					<?php endif ?>
				</div>
			</div>

			<div id="navbar">
				<nav>
					<ul id="menu">
						<li><a href="home.php">Home</a></li>
						<li class="selected"><a href="create_user.php">add user</a></li>
						<li><a href="report.php">Reports</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="site_content" class="content">
			<div align="center" class="header">
				<h1>Create a New User</h1>
			</div>
			<div id="content">
				<form method="post" action="create_user.php">
					<?php echo display_error(); ?>

					<div class="form_settings">
						<p>Username</p>
						<input type="text" name="username" value="<?php echo $username; ?>">

						<p>Email</p>
						<input type="email" name="email" value="<?php echo $email; ?>">

						<p>User Type</p>
						<select name="user_type" id="user_type">
							<option value="">--choose role--</option>
							<option value="admin">Admin</option>
							<option value="police">Police</option>
						</select>

						<p>Password</p>
						<input type="password" name="password_1">

						<p>Confirm password</p>
						<input type="password" name="password_2">
						<p class="form_buttons">
							<button type="submit" class="submit">CREATE USER</button>
							<button type="reset" class="submit">RESET</button>
						</p>
					</div>
				</form>
			</div>
		</div>
		<div id="footer">
			<a href="../login.php" id="logout">logout</a>
			<br><br>
			<p>Copyright &copy; Rivine <?php echo date("Y"); ?> All Rights Reserved.</p>
		</div>
	</div>
</body>

</html>