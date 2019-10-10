<?php 
include "../config/config.php";
include "../config/base_path.php";

$q1 = "SELECT `email` FROM users WHERE `email` = '".$_POST["email"]."' "; 
$r = mysqli_query($con_str,$q1) or die(mysqli_error());
$check_email = mysqli_num_rows($r);

if ($check_email > 0) {
	echo "email does not exist";
} elseif ($_POST['password'] != $_POST['confirm_password']) {
	echo 'password does not match';
} else {
	$password = md5($_POST['password']);
	$reg_user = "INSERT INTO `users`(`first_name`,`last_name`,`email`,`username`,`password`) VALUES('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["email"]."','".$_POST["username"]."','".$password."')"; mysqli_query($con_str,$reg_user) or die(mysqli_error());
	echo "success";
	//header('Location: '.base_url.'login.php');
	
}

?>