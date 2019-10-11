<?php include 'header.php'; ?>
<?php //print_r(base_url); exit;?>

<div class="page-content">

		<!-- Main content -->
	<div class="content-wrapper">

		<!-- Content area -->
		<div class="content d-flex justify-content-center align-items-center">

			<!-- Login card -->
			<form class="login-form" id="login_form" method="POST">
				<div class="card mb-0">
					<div class="card-body">
						<div class="text-center mb-3">
							<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
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
			<!-- /login card -->

		</div>
		<!-- /content area -->

	</div>
	<!-- /main content -->

</div>

<script type="text/javascript">
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
		
	})
</script>