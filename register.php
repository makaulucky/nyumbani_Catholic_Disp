<?php
error_reporting();
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.php">
					<img src="vendors/images/deskapp-logo.gif" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/register-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">




						<?php 
  include 'dbconfig.php';

  
 if(isset($_POST['user_reg']))

 {

$Fname= mysqli_real_escape_string($con, $_POST['Fname']);                          
$Lname= mysqli_real_escape_string($con, $_POST['Lname']); 
$username= mysqli_real_escape_string($con, $_POST['username']);  
$email= mysqli_real_escape_string($con, $_POST['email']);   
$passwordk= mysqli_real_escape_string($con, $_POST['passwordk']);
$con_passwordk= mysqli_real_escape_string($con, $_POST['con_passwordk']);
$Gender= mysqli_real_escape_string($con, $_POST['Gender']);

$Salt="#76#Secure?";  
$passwordk=md5($passwordk.$Salt);
//$Dob = date('Y-m-d', strtotime('$Dob'));
   //$Reg_date = date('Y-m-d', strtotime('$Reg_date') );


 $sql = "INSERT INTO user_reg
(
    Fname,Lname,username,email, passwordk,con_passwordk,Gender
  ) 

VALUES (
 '$Fname', '$Lname', '$username','$email','$passwordk','$con_passwordk','$Gender'
 
)";

if(mysqli_query($con, $sql))

{


	echo   "<div class='alert alert-success'>";
						  echo  "<button class='close' data-dismiss='alert'>&times;</button>";
						  echo "<h5><b>User Registered Successfully!</h5>";
						  echo   '</div>';    
	
		
			} else
		
        {

             echo   "<div class='alert alert-danger'>";
      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
      echo   "<strong>Oops! We could not Register you. Looks like you already have an account. Kindly login to your account by clicking 



<a class=\"btn btn-danger\" href=\"login.php\">Create Account to Login</a>


      </strong> ";
      echo   '</div>';
    
        }
}
 include 'dbconfig.php';
// close connection
mysqli_close($con);
  
  
  
  ?>






							<form class="tab-wizard2 wizard-circle wizard" method="POST">
								
								<h5></h5>
								<p>User Registration</p>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
									    <div class="form-group row">
											<label class="col-sm-4 col-form-label">First Name*</label>
											<div class="col-sm-8">
												<input name='Fname' placeholder='First name' type="text" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Last Name*</label>
											<div class="col-sm-8">
												<input name='Lname' placeholder='Last name' type="text" class="form-control" required>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Email Address*</label>
											<div class="col-sm-8">
												<input name='email' placeholder='email@email.com' type="email" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Username*</label>
											<div class="col-sm-8">
												<input name='username' placeholder='Username' type="text" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Password*</label>
											<div class="col-sm-8">
												<input name='passwordk' type="password" placeholder='********' class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Confirm Password*</label>
											<div class="col-sm-8">
												<input name='con_passwordk' placeholder='********' type="password" class="form-control">
											</div>
										</div>

										
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Gender*</label>
											<div class="col-sm-8">

											
										<div class="form-group">
											
										<select name='Gender' class="custom-select form-control" required>
												<option value="">Select Option</option>
												<option value="M">Male</option>
												<option value="F">Female</option>
										</select>
										
									</div>

								</section>
								<div class="form-group text-center">
                                  
								  <button type="submit" id="submit" name="user_reg" class="btn btn-primary btn-lg btn-block" style=" background-color: darkgreen" aria-pressed="false" autocomplete="off"><b>  Submit </b></button>
							  
						  </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	
	<!-- success Popup html End -->
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>