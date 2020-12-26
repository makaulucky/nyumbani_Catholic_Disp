<?php
session_start();
error_reporting (0);
ob_start();

  if (!isset($_SESSION["username"]))
   {
      header("location: login.php");
   }


$User_Name=$_SESSION["username"] ;    

?>



<!DOCTYPE html>
<html>

<?php include 'head.php'; ?>

<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/deskapp-logo.gif" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>
	<?php include 'navigation.php'; ?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Profile</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-photo">
								<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
								<img src="vendors/images/photo1.jpg" alt="" class="avatar-photo">
								
							</div>
							<h5 class="text-center h5 mb-0">
								<?php 
								echo "$User_Name";
								?>
</h5>
							<p class="text-center text-muted font-14">_______________</p>
							<div class="profile-info">
							
<?php
include 'dbconfig.php'; 
$ccc_no=$_GET['ccc_no'];
 $query = "select * FROM user_reg";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
                            {          
                                $Fname=$row['Fname']; 
								$Lname=$row['Lname'];
								$email=$row['email'];
								$Gender=$row['Gender'];
								
							}
?>

								<h5 class="mb-20 h5 text-blue">Personal Information</h5>
								<p class="text-muted font-14">Name:
								<?php 
								echo "$Fname"; 
								?>
								<?php 
								echo "$Lname";
								?>
								 </p>
								<p class="text-muted font-14">Email:
								<?php 
								echo "$email";
								?>
								</p>
								<p class="text-muted font-14">Gender:
								<?php 
								echo "$Gender";
								?> 
								</p>
								
							</div>
							
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="card-box height-100-p overflow-hidden">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#setting" role="tab">View Settings</a>
										</li>
									</ul>
									<div class="tab-content">
										

										<!-- Setting Tab start -->
										<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
											<div class="profile-setting">
												<form>
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">
															<h4 class="text-blue h5 mb-20">Edit Your Account Details</h4>
															<p>NOTE: YOU CAN'T CHANGE YOUR USERNAME</p>
															<div class="form-group">
																<label>First Name</label>
																<input required class="form-control form-control-lg" type="text">
																<label>Last Name</label>
																<input class="form-control form-control-lg" type="text">
																
															</div>
															
															<div class="form-group">
																<label>Email</label>
																<input required class="form-control form-control-lg" type="email">
															</div>
															
															<div class="form-group mb-0">
																<input type="submit" class="btn btn-primary" value="Update Information">
															</div>
													</ul>
												</form>
											</div>
										</div>
										<!-- Setting Tab End -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include 'footer.php'; ?>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/cropperjs/dist/cropper.js"></script>

</body>
</html>