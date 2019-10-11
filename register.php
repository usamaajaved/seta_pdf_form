<?php include 'header.php'; ?>
<div class="page-content">

	<!-- Main content -->
	<div class="content-wrapper">

		<!-- Content area -->
		<div class="content d-flex justify-content-center align-items-center">

			<!-- Registration form -->
			<form  id="register_form" class="flex-fill" method="POST">
				<div class="row">
					<div class="col-lg-4 offset-lg-4">
						<div class="card mb-0">
							<div class="card-body">
								<div class="row text-center pt-10 bg-danger form-group" id="email_exist" style="display: none;">
									<div class="col-md-12">
										<label>Email already exist.</label>
									</div>
								</div>
								<div class="row text-center pt-10 bg-danger form-group" id="pass-dosent-match" style="display: none;">
									<div class="col-md-12">
										<label>Password dosen't match.</label>
									</div>
								</div>
								<div class="row text-center pt-10 bg-success form-group" id="mail_sent" style="display: none;">
									<div class="col-md-12">
										<label>Mail Sent To your Mail Address.</label>
									</div>
								</div>
								<div class="text-center mb-3">
									<h5 class="mb-0">Create account</h5>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="email" name="email" class="form-control" placeholder="Your email" required="">
											<div class="form-control-feedback">
												<i class="icon-mention text-muted"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="password" name="password" class="form-control" placeholder="Create password" required="">
											<div class="form-control-feedback">
												<i class="icon-user-lock text-muted"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="password" name="confirm_password" class="form-control" placeholder="Repeat password" required="">
											<div class="form-control-feedback">
												<i class="icon-user-lock text-muted"></i>
											</div>
										</div>
									</div>
								</div>

								<div class="row text-center mt-10">
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
				if (data == "email does not exist") {
					$("#email_exist").show();
					$('#pass-dosent-match').hide();
				} else if(data == "password does not match") {
					$('#pass-dosent-match').show();
					$("#email_exist").hide();	
				} else if(data = "success") {
					$('#mail_sent').show();
					$('#pass-dosent-match').hide();
					$("#email_exist").hide();
					setTimeout(function(){
						location.reload();
					},3000);
				}
			}
		});
		
	});
</script>