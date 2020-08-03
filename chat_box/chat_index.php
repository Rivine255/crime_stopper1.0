<?php
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
$recipient_id = $_REQUEST['recipient_id'];
$chat_room_id = $_REQUEST['chat_room_id'];
$sql = "SELECT * FROM users WHERE id='$recipient_id'";
$results = $mysql_obj->query($sql);
$chat_display = "";
while ($row = $results->fetch_assoc()) {
	$username_ = $row['username'];
}
$_sql = "UPDATE tb_chat_room SET status='1' WHERE from_user_id='$recipient_id' OR to_user_id='$id'";
$mysql_obj->query($_sql);
$_sql = "UPDATE tb_chat SET status='1' WHERE id_user1='$recipient_id' OR id_user2='$id'";
$mysql_obj->query($_sql);

$sql_ = "SELECT chat_date, chat_msg, id_user1 FROM tb_chat
	    WHERE (id_user1='$id' OR id_user2='$id') AND chat_room_id='$chat_room_id'";
$results = $mysql_obj->query($sql_);
while ($row = $results->fetch_assoc()) {
	$chat_date = $row['chat_date'];
	$chat_sms = $row['chat_msg'];
	$id_user1 = $row['id_user1'];
	if ($id_user1 == $id) {
		$name = 'You';
		$class = 'fl_right';
		$box = 'chat_box_user';
	} else {
		$name = $username_;
		$class = 'fl_left';
		$box = 'chat_box_recipients';
	}
	$chat_display .= "<div class='$box $class'>
			$name: $chat_sms<br>
			$chat_date<br>
		</div><br><br><br><br>";
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
					<div class="profile_info">
						<figure class="user_avatar"><img src="../img/admin_profile.png" width="5%">
							<span style="float: right;">
								<a href="chat_list.php"><i class="fa fa-envelope"></i></a>
							</span>
						</figure>
						<div class="user_info">
							<?php if (isset($_SESSION['user'])) : ?>
							<strong><?php echo $_SESSION['user']['username']; ?></strong>
							<small>
								<i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
								&nbsp;
							</small>
							<?php endif ?>
						</div>
					</div>
				</div>
				<div id="navbar">
					<nav>
						<ul id="menu">
							<li><a href="<?php echo $url; ?>">Home</a></li>
							<li><a href="<?php echo $report_url; ?>">Report</a></li>
							<li style="float: right;"><a href="../contact_us/contact.php">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div id="site_content" class="content">
				<div align="center" class="header">
					<h1>Home</h1>
				</div>
				<div id="wait"></div>
				<div id="content">
					<h2>To:&nbsp;<strong><?php echo $username_; ?></strong></h2>
					<table align="center" style="width:70%;" border="0" class="chat_ground">
						<tr>
							<td>
								<div id="result" style="overflow-y:scroll;height:50%;width:90%;max-height:500px;">
									<?php echo $chat_display; ?>
								</div>
								<form class="form" action="send_message.php" method="POST">
									<input type="hidden" value="<?php echo $chat_room_id; ?>" name="chat_room_id">
									<input type="hidden" value="<?php echo $recipient_id; ?>" name="recipient_id">
									<textarea name="message" style="max-width:400px;max-height:90px;" rows="2" cols="50"
										placeholder="Write Message"></textarea>
									<button name="send_msg" type="submit" style="width:10%;">Send</button>
								</form>
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
			<script type="text/javascript" src="../js/_crime.js"></script>
	</body>

</html>