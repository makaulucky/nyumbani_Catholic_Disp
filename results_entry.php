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
											
				<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Results Entry</li>
								</ol>
							</nav>
							</div>
					<div class="wizard-content">



					<?php 
  include 'dbconfig.php';

  
 if(isset($_POST['results']))

 {

$Age= mysqli_real_escape_string($con, $_POST['Age']);                          
$art_start_date= mysqli_real_escape_string($con, $_POST['art_start_date']); 
$art_regimen= mysqli_real_escape_string($con, $_POST['art_regimen']);  
$current_art_date= mysqli_real_escape_string($con, $_POST['current_art_date']);   
$pre_vl_date= mysqli_real_escape_string($con, $_POST['pre_vl_date']);
$pre_vl_results= $_POST['pre_vl_results'];
$curr_vl_date= $_POST['curr_vl_date'];
$viral_load= mysqli_real_escape_string($con, $_POST['viral_load']);
$cd4= mysqli_real_escape_string($con, $_POST['cd4']);
$mstari= mysqli_real_escape_string($con, $_POST['mstari']);


//$Dob = date('Y-m-d', strtotime('$Dob'));
   //$Reg_date = date('Y-m-d', strtotime('$Reg_date') );
   //Fname 	Mname 	Lname 	Gender 	Age 	art_start_date 	art_regimen 	current_art_date 	pre_vl_date 	pre_vl_results 	curr_vl_date 	viral_load 	cd4  mstari 	

  $sql = "INSERT INTO results 
(
    Age,art_start_date,art_regimen,current_art_date,pre_vl_date,pre_vl_results,curr_vl_date,viral_load,cd4,mstari
  ) 

VALUES (
 '$Age','$art_start_date', '$art_regimen', '$current_art_date', '$pre_vl_date', '$pre_vl_results', '$curr_vl_date', '$viral_load', '$cd4', '$mstari'
 
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
	<form method="post" class="tab-wizard wizard-circle wizard">
							<h5></h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >Age :</label>
                                            <input name="Age" type="number" class="form-control" placeholder="Current Age">
                                            

                                            
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Initial ART Start Date:</label>
											<input name="art_start_date" type="date" placeholder="Remeber the Date?" class="form-control">
										</div>
                                    </div>
                                    
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label> Facility ART Start Date:</label>
											<input  name="current_art_date" type="date" class="form-control">
										</div>
                                    </div>


                                    <div class="col-md-6">
										<div class="form-group">
											<label>Previous Viral Load *:</label>
											<input  name="pre_vl_results"type="text" placeholder="Previous Viral Load" class="form-control">
										</div>
                                    </div>
                                    <div class="col-md-6">
										<div class="form-group">
											<label>Previous Viral Date *:</label>
											<input  name="pre_vl_date"type="date" placeholder="Previous Viral Load " class="form-control">
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
											<label >Current VL Date :</label>
											<input required type="date" class="form-control" placeholder="Pick Date" name='curr_vl_date'>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
											<label>Line:</label>
											<select name='mstari' class="custom-select form-control" required>
												<option value="">Select Option</option>
												<option value="1">1</option>
												<option value="2">2</option>
										</select>
										</div>
									</div>
                                </div>
                                
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Regimen:</label>
											<select name='art_regimen' class="custom-select form-control" required>
                                            <option value="">Select Option</option>
					                            <option value="ABC/3TC/KALETRA">ABC/3TC/KALETRA</option>
                                                <option value="ABC/3TC/LPVR">ABC/3TC/LPVR</option>
                                                <option value="ABC/3TC/DTG">ABC/3TC/DTG</option>
                                                <option value="TDF/3TC/DTG">TDF/3TC/DTG</option>
                                                <option value="TDF/3TC/KALETRA">TDF/3TC/KALETRA</option>
                                                <option value="TDF/3TC/EFV">TTDF/3TC/EFV</option>
										</select>
										</div>
                                    </div>
   
								<div class="col-md-6">
										<div class="form-group">
											<label>CD4:</label>
											<input name='cd4' type="text" placeholder="Anything new?" class="form-control">
										</div>
                                    </div>

                                    
                                </div>
                            </section>
						
							<div class="form-group text-center">
                                  
								  <button type="submit" id="submit" name="results" class="btn btn-primary btn-lg btn-block" style=" background-color: darkgreen" aria-pressed="false" autocomplete="off"><b>Update Results</b></button>
							  
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