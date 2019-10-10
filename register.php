<?php include 'header.php'; ?>
<div class="page-content">

	<!-- Main content -->
	<div class="content-wrapper">

		<!-- Content area -->
		<div class="content d-flex justify-content-center align-items-center">

			<!-- Registration form -->
			<form  id="register_form" class="flex-fill" method="POST">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<h5 class="mb-0">Create account</h5>
								</div>
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="text" name="first_name" class="form-control" placeholder="First name">
											<div class="form-control-feedback">
												<i class="icon-user-check text-muted"></i>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="text" name="last_name" class="form-control" placeholder="Second name">
											<div class="form-control-feedback">
												<i class="icon-user-check text-muted"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="text" name="username" class="form-control" placeholder="Choose username">
											<div class="form-control-feedback">
												<i class="icon-user-plus text-muted"></i>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="email" name="email" class="form-control" placeholder="Your email">
											<div class="form-control-feedback">
												<i class="icon-mention text-muted"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="password" name="password" class="form-control" placeholder="Create password">
											<div class="form-control-feedback">
												<i class="icon-user-lock text-muted"></i>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="password" name="confirm_password" class="form-control" placeholder="Repeat password">
											<div class="form-control-feedback">
												<i class="icon-user-lock text-muted"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="row text-center">
									<div class="col-md-12">
										<button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> Create account</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!-- /registration form -->

		</div>
		<!-- /content area -->

	</div>
	<!-- /main content -->

</div>

<script type="text/javascript">
	$('#register_form').on('submit',function(e){
		e.preventDefault();
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: 'authentication/register.php',
			type: 'post',
			data: formData,
			processData: false,
			contentType: false,
			success:function(data){
				if (data == 'password error') {
					alert('password cant match');
				}
			}
		});
		
	})
</script>