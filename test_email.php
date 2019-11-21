<?php 
$to_email = "usama-javed@hotmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: sender@example.com";

if ( mail($to_email, $subject, $body, $headers)) {
  echo("Email successfully sent to $to_email...");
} else {
  echo("Email sending failed...");
}
?>