<?php 
session_start();
include "../config/config.php";

$password = md5($_POST['password']);

$query = "SELECT * FROM `users` WHERE `email` = '".$_POST['email']."' and `password` = '".$password."'"; 
$res = mysqli_query($con_str,$query) or die(mysqli_error());

if(mysqli_num_rows($res) >0){
	$row = mysqli_fetch_object($res);
	if ($row->is_verfiy == 'No') {
		echo 'Verify acoount';
	}else{
		$_SESSION['user_id'] = $row->id;
		echo "Success";
	}
}else{
	echo "wrong email";
}

?>