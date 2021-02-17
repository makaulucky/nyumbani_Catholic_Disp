
<?php
error_reporting();
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>

<?php include './includes/head.php'; ?>

<body>
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.php">
					<img src="vendors/images/deskapp-logo.gif" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="#"></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="vendors/images/forgot-password.png" alt="">
				</div>
				<div class="col-md-6">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Reset Password</h2>
						</div>
						<h6 class="mb-20">Enter your new Password</h6>		
							<form method="POST" action="" name="reset">
							<div class="input-group custom">
								<input type="password" name="passwordk" class="form-control form-control-lg" placeholder="Enter your new password">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-5">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
										-->
										<a class="btn btn-primary btn-lg btn-block" name="passwordk"  type="submit" value="submit">Save</a>
									</div>
								</div>
								<div class="col-2">
									<div class="font-16 weight-600 text-center" data-color="#707373">Then</div>
								</div>
								<div class="col-5">
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="login.php">Login</a>
									</div>
								</div>
							</div>
						</form>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>

</html>