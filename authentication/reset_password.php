<?php
include "../config/config.php";

print_r($_POST);

$new_pass = md5($_POST['new_password']);
$confirm_new_pass = md5($_POST['confirm_password']);

if ($new_pass != $confirm_new_pass) {
	echo "Password dosent match";
} elseif ($new_pass == $confirm_new_pass) {
	$res = 'UPDATE users SET `password` = '.$confirm_new_pass.' WHERE `id` = 2'; 
	mysqli_query($con_str,$res);
	//header('Location: login.php');
} else {
	echo "string";
}


?>