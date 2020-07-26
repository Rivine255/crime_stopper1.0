<?php
include('../functions.php');
$id=$_REQUEST['id'];
if(mysqli_connect_errno()){
    echo "Filed to connect".mysqli_connect_error();
}
if(isset($id)){
$query = "DELETE FROM users WHERE id=$id"; 
$result = mysqli_query($db,$query) or die(mysqli_error());
header("location: home.php");

}
?>
