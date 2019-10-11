<?php include 'header.php'; ?>

<div class="page-content">

		<!-- Main content -->
	<div class="content-wrapper">

		<!-- Content area -->
		<div class="content d-flex justify-content-center align-items-center">

			<!-- Login card -->
			<form class="login-form" id="reset_pass_form" method="POST">
				<div class="card mb-0">
					<div class="card-body">
						<div class="text-center mb-3">
							<i class="icon-unlocked icon-2x text-slate-300 border-slate-300 border-3 p-3 mb-3 mt-1"></i>
							<h5 class="mb-0">Reset your password</h5>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="password" name="new_password" class="form-control" placeholder="Enter your new password" required=" ">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="password" name="confirm_password" class="form-control" placeholder="Confirm your new password" required="">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Save<i class="icon-circle-right2 ml-2"></i></button>
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
	$('#reset_pass_form').on('submit',function(e){
		e.preventDefault();
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: 'authentication/reset_password.php',
			type: 'post',
			data: formData,
			processData: false,
			contentType: false,
			success:function(data){
				
			}
		});
	});
</script>
