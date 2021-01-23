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
						<h4 class="text-blue h4">Results Entry</h4>

<?php
include 'dbconfig.php'; 
$ccc_no=$_GET['ccc_no'];
$query = "select * FROM admission WHERE ccc_no='$ccc_no'";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
                            {          
                                $ccc_no=$row['ccc_no']; 
								$Fname=$row['Fname']; 
								$Mname=$row['Mname']; 
								$Lname=$row['Lname']; 
							}
?>

											
				<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Results Entry</li>
									<li class="breadcrumb-item active" aria-current="page">
										<?php
										echo "$ccc_no $Fname $Mname $Lname" ;
										?>
									</li>
								</ol>
							</nav>
							</div>
					<div class="wizard-content">



<?php 
  include 'dbconfig.php';

  
 if(isset($_POST['results']))

 {

	

	$ccc_no=$_GET['ccc_no'];
	 $query = "select * FROM results WHERE ccc_count='$ccc_no' order by curr_vl_date desc limit 1 ";
	$result = mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
								{          
									$ccc_count=$row['ccc_count']; 
									$curr_vl_dateFromPre=$row['curr_vl_date']; 
									$viral_loadFromPre=$row['viral_load'];
									$art_start_date=$row['art_start_date'];
									
									
								}
	
								
					
                          
$art_start_date= $art_start_date;
$art_regimen= mysqli_real_escape_string($con, $_POST['art_regimen']);
$pre_vl_date= $curr_vl_dateFromPre;
$pre_vl_results= $viral_loadFromPre;
$curr_vl_date= $_POST['curr_vl_date'];
$viral_load= mysqli_real_escape_string($con, $_POST['viral_load']);
$cd4= mysqli_real_escape_string($con, $_POST['cd4']);
$mstari= mysqli_real_escape_string($con, $_POST['mstari']);


//$Dob = date('Y-m-d', strtotime('$Dob'));
   //$Reg_date = date('Y-m-d', strtotime('$Reg_date') );
   //Fname 	Mname 	Lname 	Gender 	Age 	art_start_date 	art_regimen 	current_art_date 	pre_vl_date 	pre_vl_results 	curr_vl_date 	viral_load 	cd4  mstari 	

 echo $sql = "INSERT INTO results 
(
	ccc_count,art_start_date,art_regimen,current_art_date,pre_vl_date,pre_vl_results,curr_vl_date,viral_load,cd4,mstari
  ) 

VALUES (
 '$ccc_no','$art_start_date', '$art_regimen', '$current_art_date', '$pre_vl_date', '$pre_vl_results', '$curr_vl_date', '$viral_load', '$cd4', '$mstari'
 
)";

if(mysqli_query($con, $sql)){


echo   "<div class='alert alert-success'>";
                      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
					  echo "<h5><b>Results Updated Successfully!</h5>";
					  
                      echo   '</div>';        
        } else
        {

             echo   "<div class='alert alert-danger'>";
      echo  "<button class='close' data-dismiss='alert'>&times;</button>";
      echo   "<strong>Oops! An Error Occured during Results submission!
<a class=\"btn btn-danger\" href=\"results_entry.php\">Try Again</a>
      </strong> ";
      echo   '</div>';
    
        }
}
 include 'dbconfig.php';
// close connection
mysqli_close($con);
  
  ?>


<?php
include 'dbconfig.php'; 
$ccc_no=$_GET['ccc_no'];
 $query = "select * FROM results WHERE ccc_count='$ccc_no' order by curr_vl_date desc limit 1 ";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
                            {          
                                $ccc_count=$row['ccc_count']; 
								$curr_vl_dateFromPre=$row['curr_vl_date']; 
								$viral_loadFromPre=$row['viral_load']; 
								
							}
?>
<?php
include 'dbconfig.php'; 
$ccc_no=$_GET['ccc_no'];
 $query = "select * FROM admissions WHERE ccc_no='$ccc_no' order by Reg_date desc limit 1 ";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
                            {          
                                $ccc_no=$row['ccc_count']; 
								$initial_RegDate=$row['Reg_date'];
								$art_start_date=$row['art_start_date'];
								
							}
 
?>


	
	<form method="post" class="tab-wizard wizard-circle wizard">
							<h5></h5>
							<section>
								<div class="row">
									
									<div class="col-md-6">
										<div class="form-group">
											<label >Initial ART Start Date:</label>

											<?php echo "<input readonly name=\"art_start_date\" placeholder=\"$art_start_date\"; value=\"$art_start_date\"; class=\"form-control\"> ";  ?>
										</div>
                                    </div>
                                    <div class="col-md-6">
										<div class="form-group">
											<label> Facility ART Start Date:</label>
											<input  name="current_art_date" type="date" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Previous Viral Load:</label>
										
											<?php echo "<input readonly name=\"pre_vl_results\" placeholder=\"$viral_loadFromPre\"; value=\"$viral_loadFromPre\"; class=\"form-control\"> ";  ?>
										</div>
                                    </div>
                                    <div class="col-md-6">
										<div class="form-group">
											<label>Previous Viral Date:</label>
											<?php echo "<input readonly  name=\"pre_vl_date\" placeholder=\"$curr_vl_dateFromPre\"; value=\"$curr_vl_dateFromPre\"; class=\"form-control\"> "; ?>
										</div>
									</div>
                                    
									<div class="col-md-6">
										<div class="form-group">
											<label>Viral Load *:</label>
											<input required name="viral_load"type="text" placeholder="Most Recent Results" class="form-control">
										</div>
                                    </div>
                                    <div class="col-md-6">
										<div class="form-group">
											<label >Current VL Date:</label>
											<input required type="date"
											 class="form-control" placeholder="Pick Date" name= 'curr_vl_date'

										
											
											>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Regimen:</label>
											<select name='art_regimen' class="custom-select form-control" required>
										<option value="">Select Options</option>
										<option value="ABC/3TC/LPVR">ABC/3TC/LPVR</option>
                                        <option value="ABC/3TC/DTG">ABC/3TC/DTG</option>
										<option value="TDF/3TC/DTG">TDF/3TC/DTG</option>
										<option value="TDF/3TC/EFV">TDF/3TC/EFV</option>
										<option value="TDF/3TC/KALETRA">TDF/3TC/KALETRA</option>
										<option value="ABC/3TC/KALETRA">ABC/3TC/KALETRA</option>
										<option value="HEI">HEI</option>
										
										
										</select>
										</div>
                                    </div>
   
								<div class="col-md-6">
										<div class="form-group">
											<label>CD4:</label>
											<input name='cd4' type="text" placeholder="Anything new?" class="form-control">
										</div>
									</div>
									<div class="form-group">
											<label>Line:</label>
											<select name='mstari' class="custom-select form-control" required>
												<option value="">Options</option>
												<option value="1">1</option>
												<option value="2">2</option>
										</select>
										</div>
									</div>
								</div>
                            </section>
						
							<div class="form-group text-center">
                                  
								  <button type="submit" id="submit" name="results" class="btn btn-primary btn-lg btn-block" style=" background-color: darkgreen" aria-pressed="false" autocomplete="off"><b>Update Results</b>
								</button>
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