<?php include 'header.php'; ?>


<div class="page-content">

		<!-- Main content -->
	<div class="content-wrapper">

		<!-- Content area -->
		<div class="content d-flex justify-content-center align-items-center">

			<!-- Login card -->
			<form class="login-form" id="forget_pass_form" method="POST">
				<div class="card mb-0">
					<div class="card-body">
						<div class="row text-center pt-10 bg-success form-group" id="email_sent" style="display: none;">
							<div class="col-md-12">
								<label>Email sent.</label>
							</div>
						</div>
						<div class="text-center mb-3">
							<i class="icon-lock2 icon-2x text-slate-300 border-slate-300 border-3 p-3 mb-3 mt-1"></i>
							<h5 class="mb-0">Forgot Password?</h5>
						</div>

						<div class="text-center mb-3">
							<label class="mb-0">Enter your email to reset your password</label>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" name="email" class="form-control" placeholder="Email" required=" ">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
						</div>

						<div class="row text-center" id="wrong_email" style="display: none;">
							<div class="col-md-12">
								<label class="text-danger">No such email exist. Please create a new account.</label>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Send<i class="icon-circle-right2 ml-2"></i></button>
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
	$('#forget_pass_form').on('submit',function(e){
		//alert(e);
		e.preventDefault();
		var formData = new FormData($(this)[0]);
		//console.log(formData);
		$.ajax({
			url: 'authentication/forgot_password.php',
			type: 'post',
			data: formData,
			processData: false,
			contentType: false,
			success: function(data) {
				if (data == "email does not exist") {
					//console.log(data);
					$('#wrong_email').show();
					$('#email_sent').hide();
				} else if (data == "reset password email") {
					$('#email_sent').show();
					$('#wrong_email').hide();
				}
			}
		});
	});
</script>