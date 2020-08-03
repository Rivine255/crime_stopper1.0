<?php
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../../login.php');
}

?>
<!DOCTYPE html>
<html>

	<head>
		<title>CrimeSTOPPERS Admin</title>
		<meta name="description" content="website description" />
		<meta name="keywords" content="website keywords, website keywords" />
		<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
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
				<div id="navbar">
					<nav>
						<ul id="menu">
							<li class="selected"><a href="home.php">Home</a></li>
							<li><a href="create_user.php">add user</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div id="site_content" class="content">
				<div align="center" class="header">
					<h1>EDIT USER DETAIL</h1>
				</div>
				<!-- notification message -->
				<?php if (isset($_SESSION['success'])) : ?>
				<div class="error success">
					<h3>
						<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
						?>
					</h3>
				</div>
				<?php endif ?>
				<!-- logged in user information -->

				<?php if (isset($_SESSION['user'])) : ?>
				<strong><?php echo $_SESSION['user']['username']; ?></strong>

				<?php

				if (count($_POST) > 0) {
					mysqli_query($db, "UPDATE users set username='" . $_POST['username'] . "', email='" . $_POST['email'] . "',user_type='" . $_POST['user_type'] . "' WHERE id='" . $_POST['id'] . "'");
					$message = "Record Modified Successfully";
					header("location: home.php");
				}
				$result = mysqli_query($db, "SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
				$row = mysqli_fetch_array($result);

				?>
				<html>

					<head>
						<title>Update user</title>
					</head>

					<body>
						<form name="frmUser" method="post" action="">
							<div><?php if (isset($message)) {
									echo $message;
								} ?>
							</div>

							Username: <br>
							<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
							<input type="text" name="username" value="<?php echo $row['username']; ?>">
							<br>

							Email:<br>
							<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
							<br>
							User_type:<br>
							<input type="text" name="user_type" class="txtField"
								value="<?php echo $row['user_type']; ?>">
							<br>
							<input type="submit" name="submit" value="Submit" class="buttom">

						</form>
					</body>

				</html>
				<?php endif ?>
			</div>
		</div>
		</div>
		</div>
		<div id="footer">
			<a href="../login.php" style="color: red;">logout</a>
			<br><br>
			<p>Copyright &copy; Rivine <?php echo date("Y"); ?> All Rights Reserved.</p>
		</div>
	</body>

</html>