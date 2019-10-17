<?php
$host	= 'localhost';
$user	= 'root';
$pass	= '';
$db		= 'setapdf_db';
$con_str = mysqli_connect($host,$user,$pass);

if(!$con_str){echo 'Server Not Connect!';exit;}

$db_setapdf = mysqli_select_db($con_str,$db);
if(!$db_setapdf){echo 'Database Not Connect!';exit;}

define('base_url', 'http://localhost/seta_pdf_form/');
define('base_mail', 'usama-javed@hotmail.com');

?>