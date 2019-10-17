<?php include 'header.php'; ?>
<?php 
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

$encrypt_id = $_GET['id'];
$id = my_simple_crypt($encrypt_id,'d');

$update_user = "UPDATE users SET is_verfiy = 'Yes' where id = ".$id." ";
$res = mysqli_query($con_str,$update_user);
if ($res) {
	echo "<span id='activated_text' style='text-align: center;margin-top: 25px;font-size: 28px;color: green;background: #c8f4c8;padding: 6px;'>Your Account has been verfied. Please Login!</span>";
}

?>

<div class="page-content">
	<div class="content-wrapper">
		<div class="content d-flex justify-content-center align-items-center">
			<form class="login-form" id="login_form" method="POST">
				<div class="card mb-0">
					<div class="card-body">
						<div class="text-center mb-3">
							<img src="assets/img/logo-final-02.jpg" height="80px">
							<h5 class="mb-0">Login to your account</h5>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" name="email" class="form-control" placeholder="Email" required=" ">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="password" name="password" class="form-control" placeholder="Password" required="">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<div class="row text-center" id="wrong_email" style="display: none;">
							<div class="col-md-12">
								<label class="text-danger">Wrong email or password.</label>
							</div>
						</div>

						<div class="form-group text-center">
							<a href="forgot_password.php" class="ml-auto">Forgot password?</a>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
						</div>

						<div class="form-group">
							<a href="register.php" class="btn btn-light btn-block">Sign up</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	setTimeout(function(){
		$('#activated_text').hide();
	}, 3000);

	$('#login_form').on('submit',function(e){
		e.preventDefault();
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: 'authentication/login.php',
			type: 'post',
			data: formData,
			processData: false,
			contentType: false,
			success:function(data){
				if (data == "wrong email") {
					$('#wrong_email').show();
				}else if(data == "Success"){
					window.location.replace('index.php');
				}
			}
		});
	});
</script>