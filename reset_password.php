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
 ?>

<div class="page-content">
		<!-- Main content -->
	<div class="content-wrapper">

		<!-- Content area -->
		<div class="content d-flex justify-content-center align-items-center">

			<!-- Login card -->
			<form class="login-form" id="reset_pass_form" method="POST">
				<div class="card mb-0">
					<div class="card-body">
						<div class="row text-center pt-10 bg-success form-group" id="pass_changed" style="display: none;">
							<div class="col-md-12">
								<label>Password changed successfuly.</label>
							</div>
						</div>
						<div class="text-center mb-3">
							<img src="assets/img/logo-final-02.jpg" height="80px">
							<h5 class="mb-0">Reset your password</h5>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="password" id="new_password" class="form-control" placeholder="Enter your new password" required=" ">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="password" id="confirm_password" class="form-control" placeholder="Confirm your new password" required="">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<div class="row text-center" id="wrong_pass" style="display: none;">
							<div class="col-md-12">
								<label class="text-danger">Password desen't match.</label>
							</div>
						</div>

						<div class="form-group">
							<button type="button"  onclick="reset_password(<?php echo $id; ?>)" class="btn btn-primary btn-block">Save<i class="icon-circle-right2 ml-2"></i></button>
						</div>
					</div>
				</div>
			</form>
			<!-- /login card -->

		</div>
		<!-- /content area -->

	</div>
	<!-- /main content -->
</div>

<script type="text/javascript">
	function reset_password(user_id){
		//alert();
		var new_password = $('#new_password').val();
		var confirm_password = $('#confirm_password').val();
		$.post('authentication/reset_password.php',{new_password:new_password,confirm_password:confirm_password,user_id:user_id}).done(function(data){
			//console.log(data);
			if (data == "Password dosent match") {
				$('#wrong_pass').show();
			}else if(data == "password changed"){
				$('#pass_changed').show();
				$('#wrong_pass').hide();
				setTimeout(function() {
			        window.location.replace('login.php');
			    }, 3000);
			}
		});
	}
</script>
