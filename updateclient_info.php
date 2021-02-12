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
						<h4 class="text-blue h4">Update Client Information</h4>
						
<?php
include 'dbconfig.php'; 
$ccc_no=$_GET['ccc_no'];
$query = "select * FROM admission WHERE ccc_no='$ccc_no'";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
                            
{  
$Fname=  mysqli_real_escape_string($con, $row['Fname']);                          
$Mname= mysqli_real_escape_string($con,  $row['Mname']); 
$Lname= mysqli_real_escape_string($con, $row['Lname']);  
$Phone_no= $row['Phone_no'];   
$Gender= mysqli_real_escape_string($con, $row['Gender']);
$Dob= $row['Dob'];
$art_start_date= $row['art_start_date'];
$Reg_date= $row['Reg_date'];
$Residence= mysqli_real_escape_string($con, $row['Residence']);
$Id_no= mysqli_real_escape_string($con, $row['Id_no']);
$Dob = date("Y-m-d", strtotime($Dob));
$Reg_date = date("Y-m-d", strtotime($Reg_date));        
                               // $ccc_no=$row['ccc_no']; 
								//$Fname=$row['Fname']; 
								//$Mname=$row['Mname']; 
								//$Lname=$row['Lname']; 
							}
?>

<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">About </li>
									<li class="breadcrumb-item active" aria-current="page">
										<?php
										echo "$ccc_no $Fname $Mname $Lname" ;
										?>
									</li>
								</ol>
							</nav>
							</div>
					<div class="wizard-content">
<!--update client form     
START
-->

<?php 
  include 'dbconfig.php';

  
 if(isset($_POST['admission']))

{

$Fname= mysqli_real_escape_string($con, $_POST['Fname']);                          
$Mname= mysqli_real_escape_string($con, $_POST['Mname']); 
$Lname= mysqli_real_escape_string($con, $_POST['Lname']);  
$Phone_no= mysqli_real_escape_string($con, $_POST['Phone_no']);   
$Gender= mysqli_real_escape_string($con, $_POST['Gender']);
$Dob= $_POST['Dob'];
$art_start_date= $_POST['art_start_date'];
$Reg_date= $_POST['Reg_date'];
$Residence= mysqli_real_escape_string($con, $_POST['Residence']);
$Id_no= mysqli_real_escape_string($con, $_POST['Id_no']);
$Dob = date("Y-m-d", strtotime($Dob));
$Reg_date = date("Y-m-d", strtotime($Reg_date));


$sql = "UPDATE admission SET Fname='$Fname', Mname='$Mname', Lname='$Lname',Phone_no='$Phone_no',Gender='$Gender', Dob='$Dob', art_start_date='$art_start_date',Reg_date='$Reg_date',Residence='$Residence', Id_no='$Id_no' WHERE ccc_no='$ccc_no' ";

if(mysqli_query($con, $sql)){


echo   "<div class='alert alert-success'>";
                      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
                      echo "<h5><b>Client Information Updated Successfully!</h5>";
                      echo   '</div>';    

    
        } else
        {

             echo   "<div class='alert alert-danger'>";
      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
      echo   "<strong>Oops! An Error occured while updating. Kindly contact System Admin for Assistance. 

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
										<label>First Name</label>
										<?php echo "<input name=\"Fname\" placeholder=\"$Fname\"; value=\"$Fname\"; class=\"form-control form-control-lg\"
																type=\"text\"
																>";  ?>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label>Middle Name</label>
										<?php echo "<input name=\"Mname\" placeholder=\"$Mname\"; value=\"$Mname\"; class=\"form-control form-control-lg\"
																type=\"text\"
																>";  ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										<label>Last Name</label>
																
										<?php echo "<input name=\"Lname\" placeholder=\"$Lname\"; value=\"$Lname\"; class=\"form-control form-control-lg\"					type=\"text\">";  ?>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label>Phone Number</label>
																
									<?php echo "<input name=\"Phone_no\" placeholder=\"$Phone_no\"; value=\"$Phone_no\"; class=\"form-control form-control-lg\"
									type=\"number\"
																>";  ?>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Gender:</label>

											<?php echo "<input readonly name=\"Gender\" placeholder=\"$Gender\"; value=\"$Gender\"; class=\"form-control form-control-lg\"
																type=\"text\"
																>";  ?>
																
											
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Residence:</label>

											<?php echo "<input readonly name=\"Residence\" placeholder=\"$Residence\"; value=\"$Residence\"; class=\"form-control form-control-lg\"
																type=\"select\"
																>";  ?>
											
										</div>
									</div>


									<div class="col-md-6">
										<div class="form-group">
											<label >Date of Birth :</label>
														
											<?php echo "<input name=\"Dob\" placeholder=\"$Dob\"; value=\"$Dob\"; class=\"form-control form-control-lg\"
																type=\"date\"
																>";  ?>
										</div>
									</div>
									

									<div class="col-md-6">
										<div class="form-group">
											<label >Admission Date :</label>
											<?php echo "<input name=\"Reg_date\" placeholder=\"$Reg_date\"; value=\"$Reg_date\"; class=\"form-control form-control-lg\"
																type=\"date\"
																>";  ?>
										</div>
									</div>

								<div class="col-md-6">
								<div class="form-group">
											<label>Initial Art Start Date::</label>
											<?php echo "<input name=\"art_start_date\" placeholder=\"$art_start_date\"; value=\"$art_start_date\"; class=\"form-control form-control-lg\"
																type=\"date\"
																>";  ?>
										</div>
									</div>
										<div class="form-group">
											<label>ID Number:</label>
											<?php echo "<input name=\"Id_no\" placeholder=\"$Id_no\"; value=\"$Id_no\"; class=\"form-control form-control-lg\" type=\"number\"
																>";  ?>
										</div>
									</div>
									
								</div>
							</section>
						
							<div class="form-group text-center">
                                  
								  <button type="submit" id="submit" name="admission" class="btn btn-primary btn-lg btn-block" style=" background-color: darkgreen" aria-pressed="false" autocomplete="off"><b>Update Information</b></button>
							  
						  </div>

						</form>
					</div>
				</div>

<!-- END-->
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