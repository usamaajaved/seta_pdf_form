<?php 
include "../config/config.php";
include "../config/base_path.php";

$check_email = "SELECT `email` FROM users WHERE `email` = '".$_POST["email"]."' "; 
$check_email = mysqli_query($con_str,$check_email) or die(mysqli_error());
$check_email = mysqli_num_rows($check_email);

if (($_POST['password'] != $_POST['confirm_password']) || $check_email > 0) {
	echo 'password error';
} else {
	$password = md5($_POST['password']);
	$reg_user = "INSERT INTO `users`(`first_name`,`last_name`,`email`,`username`,`password`) VALUES('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["email"]."','".$_POST["username"]."','".$password."')"; mysqli_query($con_str,$reg_user) or die(mysqli_error());
	header('Location: '.base_url.'login.php');
	
}

?>