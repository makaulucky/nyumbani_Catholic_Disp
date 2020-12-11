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
					<li><a href="register.php">Register</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login to the System</h2>
						</div>



						
<?php

if (isset($_POST['Submit']))
    {     
include_once 'dbconfig.php';
$username=$_POST['username'];
$password=$_POST['passwordk'];

// Starting session



//$encryptpassword=md5($password);

//$encryptpasswordwithsalt=$encryptpasswordPTz~*mnh,mb3/8E9;    
        
$Salt="#76#Secure?";      
$pass =md5($password.$Salt);

//echo "$pass >>>>$password>>>$Salt";



//$salt = '##[]_H38E9';
//$hash = md5($pass, '$2y$07$'.$salt.'$');

  
                
 $query = mysqli_query($con, "SELECT * FROM user_reg WHERE username='$username' and passwordk='$pass' ");

 if (mysqli_num_rows($query) >= 1)
{ 
 
// Storing session data
$_SESSION["username"] = "$username";


    header("Location:index.php");
    
  }

            

        else
        {            
          
       echo   "<div class='alert alert-danger'>";
            echo  "<button class='close' data-dismiss='alert'>&times;</button>";
            echo  " <strong>Oops! Account does not exist! Kindly register as a memeber</strong> ";
            echo   '</div>';
        

        
        
        }


 }


?>                











						<form method="POST">
							<div class="input-group custom">
								<input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>


							<div class="input-group custom">
								<input type="password" name="passwordk" class="form-control form-control-lg" placeholder="**********" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password"><a href="forgot-password.php">Forgot Password</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">



								<button type="submit" value="submit" id="submit" name="Submit" class="btn btn-primary btn-lg btn-block" style=" background-color: darkgreen" aria-pressed="false" autocomplete="off"><b> Sign In </b>
								</button>
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
										
									</div>
									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="register.php">Register To Create Account</a>
									</div>
								</div>
							</div>
						</form>
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