<?php

include "../config/config.php";

function my_simple_crypt( $string, $action = 'e' ) {
  	$secret_key = 'my_simple_secret_key';
  	$secret_iv = 'my_simple_secret_iv';
  	$output = false;
 	$encrypt_method = "AES-256-CBC";
  	$key = hash( 'sha256', $secret_key );
	$iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
    if( $action == 'e' ) {
		$output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }
    return $output;
}

$get = "SELECT * from users WHERE `email` = '".$_POST['email']."'";
$getUser = mysqli_query($con_str,$get) or die(mysqli_error());
if(mysqli_num_rows($getUser)){
	$res = mysqli_fetch_object($getUser);
	$user_id = $res->id;
	$encrypt_id = my_simple_crypt($user_id, 'e');
	$to = $_POST['email'];
	$subject = 'Record Removal Services';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$message = '<!DOCTYPE html>
	<html>
		<head>
		  <meta charset="utf-8">
		  <meta http-equiv="x-ua-compatible" content="ie=edge">
		  <title>Password Reset</title>
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <style type="text/css">
		  @media screen {
		    @font-face {
		      font-family: "Source Sans Pro";
		      font-style: normal;
		      font-weight: 400;
		      src: local("Source Sans Pro Regular"), local("SourceSansPro-Regular"), url(https://fonts.gstatic.com/s/sourcesanspro/v10/ODelI1aHBYDBqgeIAH2zlBM0YzuT7MdOe03otPbuUS0.woff) format("woff");
		    }
		    @font-face {
		      font-family: "Source Sans Pro";
		      font-style: normal;
		      font-weight: 700;
		      src: local("Source Sans Pro Bold"), local("SourceSansPro-Bold"), url(https://fonts.gstatic.com/s/sourcesanspro/v10/toadOcfmlt9b38dHJxOBGFkQc6VGVFSmCnC_l7QZG60.woff) format("woff");
		    }
		  }
		  body,
		  table,
		  td,
		  a {
		    -ms-text-size-adjust: 100%;
		    -webkit-text-size-adjust: 100%;
		  }
		  table,
		  td {
		    mso-table-rspace: 0pt;
		    mso-table-lspace: 0pt;
		  }
		  img {
		    -ms-interpolation-mode: bicubic;
		  }
		  a[x-apple-data-detectors] {
		    font-family: inherit !important;
		    font-size: inherit !important;
		    font-weight: inherit !important;
		    line-height: inherit !important;
		    color: inherit !important;
		    text-decoration: none !important;
		  }
		  div[style*="margin: 16px 0;"] {
		    margin: 0 !important;
		  }
		  body {
		    width: 100% !important;
		    height: 100% !important;
		    padding: 0 !important;
		    margin: 0 !important;
		  }
		  table {
		    border-collapse: collapse !important;
		  }
		  a {
		    color: #1a82e2;
		  }
		  img {
		    height: auto;
		    line-height: 100%;
		    text-decoration: none;
		    border: 0;
		    outline: none;
		  }
		  </style>
		</head>
		<body style="background-color: #e9ecef;">
		  <div class="preheader" style="display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;">
		    
		  </div>
		  <table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <tr>
		      <td align="center" bgcolor="#e9ecef">
		        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
		          <tr>
		            <td align="center"  style="padding: 36px 24px;">
		            </td>
		          </tr>
		        </table>
		      </td>
		    </tr>
		    <tr>
		      <td align="center" bgcolor="#e9ecef">
		        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
		          <tr style="text-align:center;">
		            <td bgcolor="#ffffff" style="padding: 15px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
		              <h1 style="margin-top: 15px; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Reset your password <br/></h1>
		            </td>
		          </tr>
		        </table>
		      </td>
		    </tr>
		    <tr>
		      <td align="center" bgcolor="#e9ecef">
		        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
		          <tr>
		            <td align="center" bgcolor="#ffffff" style="padding:10px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
		              <p style="padding:15px;">Seems like you forgot your password. Click the below button to reset your password. If you did not forget your password you can safely ignore the email.</p>
		            </td>
		          </tr>
		          <tr>
		            <td align="left" bgcolor="#ffffff">
		              <table border="0" cellpadding="0" cellspacing="0" width="100%">
		                <tr>
		                  <td align="center" bgcolor="#ffffff" style="padding: 12px;">
		                    <table border="0" cellpadding="0" cellspacing="0">
		                      <tr>
		                        <td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
		                          <a href="'.base_url.'reset_password.php?id='.$encrypt_id.'" style="display: inline-block;
		    padding: 16px 36px;font-size: 16px;color: #ffffff;text-decoration: none;border-radius: 6px;">Reset Password</a>
		                        </td>
		                      </tr>
		                    </table>
		                  </td>
		                </tr>
		              </table>
		            </td>
		          </tr>
		          <tr>
		            <td align="center" bgcolor="#ffffff" style="padding: 24px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
		              <p style="margin: 0;">If that does not work, copy and paste the following link in your browser:</p>
		              <p style="margin: 0;padding: 12px;"><a href="'.base_url.'reset_password.php?id='.$encrypt_id.'">'.base_url.'reset_password.php?id='.$encrypt_id.'</a></p>
		            </td>
		            <tr style="height:35px">
		            <td bgcolor="#ffffff"></td>
		            </tr>
		          </tr>
		        </table>
		      </td>
		    </tr>
		  </table>
		  <div class="row">
		    <div class="col-md-12" style="height:60px">
		    </div>
		  </div>
		</body>
	</html>';

	mail($to, $subject, $message, $headers);
	echo "reset password email";
}else{
	echo "email does not exist";
}


?>