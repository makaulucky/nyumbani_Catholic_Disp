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

<?php include './includes/head.php'; ?>

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

<?php include './includes/navigation.php'; ?>

	
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

  
 if(isset($_POST['admission']))

 {

$Fname= mysqli_real_escape_string($con, $_POST['Fname']);                          
$Mname= mysqli_real_escape_string($con, $_POST['Mname']); 
$Lname= mysqli_real_escape_string($con, $_POST['Lname']);  
$Phone_no= mysqli_real_escape_string($con, $_POST['Phone_no']);   
$Gender= mysqli_real_escape_string($con, $_POST['Gender']);
$Residence= mysqli_real_escape_string($con, $_POST['Residence']);
$Dob= $_POST['Dob'];
$art_start_date= $_POST['art_start_date'];
$initial_regimen= mysqli_real_escape_string($con, $_POST['initial_regimen']);
$initiation_line= mysqli_real_escape_string($con, $_POST['initiation_line']);
$Reg_date= $_POST['Reg_date'];
$Id_no= mysqli_real_escape_string($con, $_POST['Id_no']);
$Dob = date("Y-m-d", strtotime($Dob));
$Reg_date = date("Y-m-d", strtotime($Reg_date));


 $sql = "INSERT INTO admission 
(
    Fname,Mname,Lname,Phone_no,Gender,Dob,art_start_date,initial_regimen,initiation_line,Reg_date,Residence,Id_no
  ) 

VALUES (
 '$Fname', '$Mname', '$Lname', '$Phone_no','$Gender','$Dob','$art_start_date','$initial_regimen','$initiation_line','$Reg_date','$Residence','$Id_no'
 
)";

if(mysqli_query($con, $sql)){


echo   "<div class='alert alert-success'>";
                      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
                      echo "<h5><b>Client Registered Successfully!</h5>";
                      echo   '</div>'; 
					  header('Refresh:6; url=ccclist.php');   

    
        }
		
		else
        {

             echo   "<div class='alert alert-danger'>";
      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
      echo   "<strong>Oops! An Error occured during Registration. Kindly contact System Admin for Assistance. 

      </strong> ";
      echo   '</div>';
    
        }
}
 include 'dbconfig.php';
// close connection
mysqli_close($con);
 
  ?>

						<form method="post" class=" wizard-circle wizard">
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
											<input name="Phone_no"type="NUMBER"  placeholder="07XX XXXXXXXX" class="form-control">
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Gender :</label>
											<select name='Gender' class="custom-select form-control" required>
												<option value="">Select Option</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
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
											<input required type="date"  name='Dob' class="form-control " value="$Dob" placeholder="Select Date">
										</div>
									</div>
									

									<div class="col-md-6">
										<div class="form-group">
											<label >Admission Date :</label>
											<input required  type="date" class="form-control" placeholder="Select Date" name='Reg_date'>
										</div>
									</div>

								<div class="col-md-6">
								<div class="form-group">
											<label>Initial Art Start Date:</label>
											<input required name='art_start_date' type="date" placeholder="Optional" class="form-control">
										</div>
									</div>


									<div class="col-md-6">
										<div class="form-group">
											<label>Initial Art Regimen:</label>
											<select name='initial_regimen' class="custom-select form-control" required>
												<option value="">Select Option</option>
										<option value="ABC/3TC/LPVR">ABC/3TC/LPVR</option>
                                        <option value="ABC/3TC/DTG">ABC/3TC/DTG</option>
										<option value="TDF/3TC/DTG">TDF/3TC/DTG</option>
										<option value="TDF/3TC/EFV">TDF/3TC/EFV</option>
										<option value="TDF/3TC/KALETRA">TDF/3TC/KALETRA</option>
										<option value="ABC/3TC/KALETRA">ABC/3TC/KALETRA</option>
										<option value="NVP+CTX">NVP+CTX</option>
										</select>
										</div>
									</div>


									<div class="col-md-6">
										<div class="form-group">
											<label>Initial Art Line:</label>
											<select name='initiation_line' class="custom-select form-control" required>
												<option value="">Select Option</option>
												<option value="First Line">First Line</option>
												<option value="Second Line">Second Line</option>
												<option value="Third Line">Third Line</option>
												<option value="Exposed">Exposed</option>
										</select>
										</div>
									</div>

										<div class="form-group">
											<label>ID Number:</label>
											<input name='Id_no' type="NUMBER" placeholder="Optional" class="form-control">
										</div>
									</div>
									
								</div>
							</section>
						
							<div class="form-group text-center">
                                  
								  <button type="submit" id="submit" name="admission" class="btn btn-primary btn-lg btn-block" style=" background-color: darkgreen" aria-pressed="false" autocomplete="off"><b>Register </b></button>
							  
						  </div>

						</form>
					</div>
				</div>

				

			
			</div>
			<?php include './includes/footer.php'; ?>
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