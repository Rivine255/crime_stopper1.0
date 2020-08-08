<?php
error_reporting(0);
session_start();
require "function.php";
$id = $_SESSION['user']['id'];
$username = $_SESSION['user']['username'];
$user_type = $_SESSION['user']['user_type'];
if ($user_type == "admin") {
	$url = "../admin/home.php";
	$report_url = "../admin/report.php";
} else if ($user_type == "police") {
	$url = "../police_mode/home.php";
	$report_url = "../police_mode/report.php";
}
$sql = "SELECT id, username FROM users WHERE id!='$id'";
$results_ = $mysql_obj->query($sql);

$sql_ = "SELECT chat_date, chat_msg, chat_room_id FROM tb_chat
		WHERE id_user1='$id' OR id_user2='$id'";
$results = $mysql_obj->query($sql_);
while ($row = $results->fetch_assoc()) {
	$chat_date = $row_['chat_date'];
	$username = $row_['username'];
	$chat_sms = $row_['chat_msg'];
	$chat_display .= "<div>
			$chat_date<br>
			$username: $chat_sms<br>
		    </div>";
} ?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Home - <?php echo $username; ?></title>
	<meta name="description" content="website description" />
	<meta name="keywords" content="website keywords, website keywords" />
	<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
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
						<!-- class="logo_colour", allows you to change the colour of the text -->
						<h1><a class="logo_colour" href="../index.php">CrimeSTOPPERS</a></h1>
						<h2>National Police Service</h2>
					</div>
				</div>
			</div>
			
			<div class="profile_info">
					<figure class="user_avatar"><img src="../img/admin_profile.png" width="5%">
						<span style="float: right;">
							<a href="../chat_box/chat_list.php"><i class="fa fa-2x fa-envelope"></i></a>
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
						<li><a href="<?php echo $url; ?>">Home</a></li>
						<li><a href="<?php echo $report_url; ?>">Report</a></li>
						<li style="float: right;"><a href="../contact.php">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="site_content" class="content">
			<div align="center" class="header">
				<h1>New Conversation</h1>
			</div>
			<div id="wait"></div>
			<div id="content">
				<table align="center" class="chat_ground">
					<tr>
						<td>
							<div style="overflow-y:scroll;height:410;max-height:500px;width:705px;"></div>
							<div>
								<form method="POST" action="send_message.php" target="frame">
									<div valign="top">
										<strong>To:</strong>&nbsp;&nbsp;
										<select name="chat_detail">
											<option value="">--choose name--</option>
											<?php
											while ($row_ = $results_->fetch_assoc()) {
												$id = $row_['id'];
												$username1 = $row_['username'];
												echo "<option value='$id-$username1'>$username1</option>";
											}
											?>
										</select>
										<input type="hidden" value="" name="chat_room_id">
									</div>
									<textarea style="max-width:600px;max-height:90px;" cols="500" rows="4" placeholder="Write Message" name="message"></textarea>
									<button name="send_msg" style="width:10%;" type="submit">Send</button>
								</form>
							</div>
						</td>
					</tr>
				</table>

			</div>
		</div>
		<div id="footer">
			<a href="../login.php" id="logout">logout</a>
			<br><br>
			<p>Copyright &copy; Rivine <?php echo date("Y"); ?> All Rights Reserved.</p>
		</div>
		<!-- JAVASCRIPTS -->
		<script type="text/javascript" src="js/ajax.js"></script>
		<script type="text/javascript" src="js/_crime.js"></script>
</body>

</html>