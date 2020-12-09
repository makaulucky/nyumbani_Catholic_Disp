<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>NYUMBANI Village-Clinic</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.php">
					<img src="vendors/images/deskapp-logo.svg" alt="">
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


//$Dob = date('Y-m-d', strtotime('$Dob'));
   //$Reg_date = date('Y-m-d', strtotime('$Reg_date') );


 echo $sql = "INSERT INTO user_reg
(
    Fname,Lname,username,email, passwordk,con_passwordk,Gender,
  ) 

VALUES (
 '$Fname', '$Lname', '$username','$email','$passwordk','$con_passwordk','$Gender'
 
)";

if(mysqli_query($con, $sql)){


echo   "<div class='alert alert-success'>";
                      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
                      echo "<h5><b>User Registered Successfully!</h5>";
                      echo   '</div>';    

    
        } else
        {

             echo   "<div class='alert alert-danger'>";
      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
      echo   "<strong>Oops! We could not Enroll you. Looks like you already enrolled. Kindly create an account by clicking 



<a class=\"btn btn-danger\" href=\"login.php\">Create Account to Login</a>


      </strong> ";
      echo   '</div>';
    
        }
}
 include 'dbconfig.php';
// close connection
mysqli_close($con);
  
  
  
  ?>











							<form class="tab-wizard2 wizard-circle wizard">
								<h5>User Registration</h5>
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
												<input name='username' placeholder='Username' type="username" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Password*</label>
											<div class="col-sm-8">
												<input name='passwordk' type="password" placeholder='....' class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Confirm Password*</label>
											<div class="col-sm-8">
												<input name='con_passwordk' type="password" class="form-control">
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