<?php
session_start();
require "function.php";
$today = date('Y-m-d H:i:s');
$id = $_SESSION['user']['id'];
$username = $_SESSION['user']['username'];
$user_type = $_SESSION['user']['user_type'];
if ($user_type == "admin") {
	$url = "../admin/home.php";
} else if ($user_type == "police") {
	$url = "../police_mode/home.php";;
}
$found = 0;
$k = 1;
$sql = "SELECT * FROM tb_chat_room WHERE to_user_id='$id' OR from_user_id='$id'";
$results = $mysql_obj->query($sql);
$tbody = '';
$button = "<span style='float:left;background-color:navy;padding:5px;'><a style='color:white;' href='new_chat.php'>New Conversation Text</a></span>";

while ($row = $results->fetch_assoc()) {
	$chat_room_id = $row['chat_room_id'];
	$id_user1 = $row['from_user_id'];
	$id_user2 = $row['to_user_id'];
	$sql_ = "SELECT * FROM users WHERE id='$id_user1'";
	$results_ = $mysql_obj->query($sql_);
	while ($rows_ = $results_->fetch_assoc()) {
		$name = $rows_['username'];
		if ($id_user1 == $id) {
			$name_ = 'you';
			$id_user = $id_user2;
		} else {
			$name_ = $name;
			$id_user = $id_user1;
		}
	}
	$chat_msg = $row['last_message'];
	$status = $row['status'];
	if ($status == '0') {
		$bold = "<b>$chat_msg</b><br>";
	} else {
		$bold = "$chat_msg<br>";
	}
	$chat_date = $row['chat_date'];
	$time = dateDifference($chat_date, $today, $differenceFormat = '%d Days %h Hours %i minutes');
	$tbody .= "<tr>
                <td>$bold<font style='font-size:10px; color: blue;'>$name_ - $time<font></td>
                <td><a href='chat_index.php?chat_room_id=$chat_room_id&recipient_id=$id_user'>Show Conversation</a></td>
              </tr>";
	$found = 1;
}
$table_display = "
<table width='60%' style='border-color:transparent;padding:10px;' cellspacing='0'>
	   $tbody
  </table>";
if ($found == 1) {
	$body_display = $button . $table_display;
} else {
	$body_display = "<div align='center'>$button <br><br>NO MESSAGE</div>";
}
?>

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
								<a href="../chat_box/chat_list.php"><i class="fa fa-envelope"></i></a>
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
							<li><a href="report.php">Report</a></li>
							<li style="float: right;"><a href="../contact.php">Contact Us</a></li>
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
					<?php echo $body_display; ?>
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