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
				

				<div class="pd-20 card-box mb-30">
				<div class="clearfix">
						<h4 class="text-blue h4">Client Registration</h4>
											
				<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Admissions</li>
								</ol>
							</nav>
							</div>
					<div class="wizard-content">



					<?php 
  include 'dbconfig.php';

  
 if(isset($_POST['Admission']))

 {

$Fname= mysqli_real_escape_string($con, $_POST['Fname']);                          
$Mname= mysqli_real_escape_string($con, $_POST['Mname']); 
$Lname= mysqli_real_escape_string($con, $_POST['Lname']);  
$Phone_no= mysqli_real_escape_string($con, $_POST['Phone_no']);   
$Gender= mysqli_real_escape_string($con, $_POST['Gender']);
$Dob= $_POST['Dob'];
$Reg_date= $_POST['Reg_date'];
$Residence= mysqli_real_escape_string($con, $_POST['Residence']);
$Id_no= mysqli_real_escape_string($con, $_POST['Id_no']);


//$Dob = date('Y-m-d', strtotime('$Dob'));
   //$Reg_date = date('Y-m-d', strtotime('$Reg_date') );


  $sql = "INSERT INTO admission 
(
    Fname,Mname,Lname,Phone_no,Gender,Dob,Reg_date,Residence,Id_no
  ) 

VALUES (
 '$Fname', '$Mname', '$Lname', '$Phone_no','$Gender','$Dob','$Reg_date','$Residence','$Id_no'
 
)";

if(mysqli_query($con, $sql)){


echo   "<div class='alert alert-success'>";
                      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
                      echo "<h5><b>Client Registered Successfully!</h5>";
                      echo   '</div>';    

    
        } else
        {

             echo   "<div class='alert alert-danger'>";
      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
      echo   "<strong>Oops! We could not Enroll you. Looks like you already enrolled. Kindly create an account by clicking 



<a class=\"btn btn-danger\" href=\"student_registration.php\">Create Account to Login</a>


      </strong> ";
      echo   '</div>';
    
        }
}
 include 'dbconfig.php';
// close connection
mysqli_close($con);
  
  
  
  ?>








						<form method="post" class="tab-wizard wizard-circle wizard">
							<h5></h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >First Name *:</label>
											<input name="Fname" type="text" class="form-control" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Middle Name :</label>
											<input name="Mname" type="text" placeholder="Optional" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label> Last Name *:</label>
											<input required name="Lname" type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Phone Number *:</label>
											<input required name="Phone_no"type="tel" placeholder="07XX XXXXXXXX" class="form-control">
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Gender :</label>
											<select name='Gender' class="custom-select form-control" required>
												<option value="">Select Option</option>
												<option value="M">Male</option>
												<option value="F">Female</option>
										</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Residence:</label>
											<select name='Residence' class="custom-select form-control" required>
												<option value="">Select Option</option>
												<option value="Village">Village</option>
												<option value="Community">Community</option>
										</select>
										</div>
									</div>


									<div class="col-md-6">
										<div class="form-group">
											<label >Date of Birth :</label>
											<input  name='Dob' class="form-control date-picker" placeholder="Select Date">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label >Admission Date :</label>
											<input  type="text" class="form-control date-picker" placeholder="Select Date" name='Reg_date'>
										</div>
									</div>

								<div class="col-md-6">
										<div class="form-group">
											<label>ID Number:</label>
											<input name='Id_no' type="text" placeholder="Optional" class="form-control">
										</div>
									</div>
								</div>


								</div>
							</section>
						
							<div class="form-group text-center">
                                  
								  <button type="submit" id="submit" name="Admission" class="btn btn-primary btn-lg btn-block" style=" background-color: darkgreen" aria-pressed="false" autocomplete="off"><b>  Submit </b></button>
							  
						  </div>

						</form>
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
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>
</html>