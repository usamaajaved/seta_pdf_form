<?php 
include "../config/config.php";
include "../config/base_path.php";
$query = "select * from users where id = '".$_POST['user_id']."' AND email = '".$_POST['email']."'";
$res = mysqli_query($con_str, $query); 
if (mysqli_num_rows($res)> 0) {
	$query2 = "UPDATE users SET is_verfiy = 'Yes' where id = '".$_POST['user_id']."'";
	mysqli_query($con_str,$query2);
	echo "success";
}else{
	echo "wrong email";
}
?>