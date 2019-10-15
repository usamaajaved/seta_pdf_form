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

			<!-- Registration form -->
			<form  id="verifymail_form" class="flex-fill" method="POST">
				<div class="row">
					<div class="col-lg-4 offset-lg-4">
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<img src="assets/img/logo-final-02.jpg" height="80px">
								</div>
								<div class="row text-center pt-10 bg-success form-group" id="activated" style="display: none;">
									<div class="col-md-12">
										<label>Account Activated Successfully!<br>Please Login</label>
									</div>
								</div>
								<div class="text-center mb-3">
									<h5 class="mb-0">Enter Your Mail Address</h5>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="email" name="email" class="form-control" id="email" placeholder="Your email" >
											<div class="form-control-feedback">
												<i class="icon-mention text-muted"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="row text-center" id="wrong_email" style="display: none">
									<div class="col-md-12">
										<label class="text-danger">Invalid Email Address.</label>
									</div>
								</div>
								<div class="row text-center mt-10">
									<div class="col-md-12">
										<button type="button" onclick="activate_account(<?php echo $id; ?>)" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> Verify account</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	function activate_account(user_id){
		var email = $('#email').val();
		$.post('authentication/verify_mail.php',{user_id:user_id,email:email}).done(function(data){
			if (data == "wrong email") {
				$('#wrong_email').show();
			}else if(data == "success"){
				$('#activated').show();
				$('#wrong_email').hide();
				setTimeout(function() {
			        window.location.replace('login.php');
			    }, 3000);
			}
		});
	}
</script>