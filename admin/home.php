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
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/button.css" />
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
						<li class="selected"><a href="home.php">Home</a></li>
						<li><a href="create_user.php">add user</a></li>
						<li style="float: right;"><a href="#">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="site_content" class="content">
			<div align="center" class="header">
				<h1>CrimeSTOPPERS Users</h1>
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
			<?php $results = mysqli_query($db, "SELECT * FROM users"); ?>
			<table id="user_list">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email Address</th>
						<th>User Type</th>
						<th colspan="2">Actions</th>
					</tr>
				</thead>

				<?php while ($row = mysqli_fetch_array($results)) { ?>
					<tr>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['user_type']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['id']; ?>" class="edit_btn">Edit</a>
						</td>
						<td>
							<a href="delete.php?id=<?php echo $row['id']; ?>" class="edit_btn">delete</a>
						</td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<div id="footer">
		<a href="../login.php" style="color: red;">logout</a>
		<br><br>
		<p>Copyright &copy; Rivine <?php echo date("Y"); ?> All Rights Reserved.</p>
	</div>
</body>

</html>