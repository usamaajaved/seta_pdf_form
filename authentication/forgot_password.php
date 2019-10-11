<?php

include "../config/config.php";

$getUserId = "SELECT `id` from users WHERE `email` = '".$_POST['email']."'";
$getUserId = mysqli_query($con_str,$getUserId) or die(mysqli_error());
$getUserId = mysqli_fetch_row($getUserId);

print_r($getUserId);

?>