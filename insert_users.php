<?php 
include "config/config.php";
if (isset($_POST['cif_username'])) {
	$email 		= $_POST['cif_username'];
	$password 	= md5($_POST['cif_password']);

	$checkUser 	= mysqli_query($con_str, "SELECT * FROM `users` where `email` = '".$email."'");
	if (mysqli_num_rows($checkUser) > 0) {
		mysqli_query($con_str, "UPDATE `users`set `password` = '".$password."' where `email`='".$email."' ");
		echo 'User Data Updated';
	}else{
		mysqli_query($con_str, "INSERT into `users` (`email`, `password`, `is_verfiy`, `is_form`) VALUES('".$email."', '".$password."', 'Yes', 'No')");
		echo 'User Data insert!';
	}
}
?>