<?php include 'header.php'; ?>
<?php //print_r(base_url); exit;?>

<div class="page-content">

		<!-- Main content -->
	<div class="content-wrapper">

		<!-- Content area -->
		<div class="content d-flex justify-content-center align-items-center">

			<!-- Login card -->
			<form class="login-form" method="POST" action="authentication/login.php">
				<div class="card mb-0">
					<div class="card-body">
						<div class="text-center mb-3">
							<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
							<h5 class="mb-0">Login to your account</h5>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" name="email" class="form-control" placeholder="Email">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="password" name="password" class="form-control" placeholder="Password">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<div class="form-group d-flex align-items-center">
							<a href="login_password_recover.html" class="ml-auto">Forgot password?</a>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
						</div>

						<div class="form-group">
							<a href="<?php echo base_url; ?>register.php" class="btn btn-light btn-block">Sign up</a>
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