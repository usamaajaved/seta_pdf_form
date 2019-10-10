<?php 
session_start();
include "../config/config.php";

$password = md5($_POST['password']);

$query = "SELECT * FROM `users` WHERE `email` = '".$_POST['email']."' and `password` = '".$password."' "; 
$res = mysqli_query($con_str,$query) or die(mysqli_error());
if(mysqli_num_rows($res) >0){
	while ($data = mysqli_fetch_array($res)){
		$_SESSION['user_id'] = $data['id']; 
		$_SESSION['username'] = $data['username']; 
		header('Location: ../index.php');
	}
}else{
	echo "wrong email";
}

?>