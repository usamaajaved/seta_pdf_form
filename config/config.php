<?php
$Host	= 'localhost';
$User	= 'root';
$Pass	= '';
$db		= 'setapdf_db';
$con_str = mysqli_connect($Host,$User,$Pass);

if(!$con_str){echo 'Server Not Connect!';exit;}

$db_setapdf = mysqli_select_db($con_str,$db);
if(!$db_setapdf){echo 'Database Not Connect!';exit;}
?>