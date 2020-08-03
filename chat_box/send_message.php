<?php
session_start();
require "function.php";
$id = $_SESSION['user']['id'];
$username = $_SESSION['user']['username'];
if (isset($_POST['send_msg'])) {
    $chat_display = $_SESSION['chat_display'];
    $date_time = date('Y-m-d H:i:s');
    //=================================================================================================
    $message = $mysql_obj->real_escape_string($_REQUEST['message']);
    if (isset($_REQUEST['recipient_id'])) {
        $recipient_id = $mysql_obj->real_escape_string($_REQUEST['recipient_id']);
    }
    if (isset($_REQUEST['chat_detail'])) {
        $chat_detail = $mysql_obj->real_escape_string($_REQUEST['chat_detail']);
        $xx = explode("-", $chat_detail);
        $recipient_id = $xx[0];
        $recipient_name = $xx[1];
        $room_name = $username . "-" . $recipient_name;
    }
    $chat_room_id = $mysql_obj->real_escape_string($_REQUEST['chat_room_id']);
    if ($chat_room_id == '') {
        $sql = "INSERT INTO tb_chat_room (chat_room_name, last_message, from_user_id, to_user_id, chat_date) 
            VALUES ('$room_name', '$message', '$id', '$recipient_id', '$date_time')";
        $results = $mysql_obj->query($sql);
        $sql_se = "SELECT chat_room_id FROM tb_chat_room WHERE chat_room_name='$room_name'";
        $result = $mysql_obj->query($sql_se);
        while ($row = $result->fetch_assoc()) {
            $chat_room_id = $row['chat_room_id'];
        }
    } else {
        $sql = "UPDATE tb_chat_room SET last_message='$message', from_user_id='$id', to_user_id='$recipient_id', chat_date='$date_time' 
            WHERE chat_room_id ='$chat_room_id'";
        $mysql_obj->query($sql);
    }
    $sql_ = "INSERT INTO tb_chat (chat_room_id, chat_msg, id_user1, id_user2, chat_date) 
	    VALUES ('$chat_room_id', '$message' , '$id', '$recipient_id', '$date_time')";
    $results_ = $mysql_obj->query($sql_);
    if ($results_ == 1) {
        header("location: chat_index.php?recipient_id=$recipient_id&chat_room_id=$chat_room_id");
    }
} else {
    return;
}