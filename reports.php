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
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Results Table</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Results Table</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							
						</div>
					</div>
				</div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-20 h4">Age Group summery</h4>
							<ul class="list-group">
								<li class="list-group-item d-flex justify-content-between align-items-center">
                                <?php
include 'dbconfig.php'; 
$ccc_no=$_GET['ccc_no'];
$query = "SELECT Case 
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) < 1 then '<1'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 1 and 4 then '1-4'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 5 and 9 then '5-9'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 10 and 14 then '10-14'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 15 and 19 then '15-19'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 20 and 24 then '20-24'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 25 and 29 then '25-29'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 30 and 34 then '30-34'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 35 and 39 then '35-39'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 40 and 44 then '40-44'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 45 and 49 then '45-49'
else '>50' END AS Age_Group, 
sum(if(`Gender`='Male', 1, 0)) as Male, 
sum(if(`Gender`='Female', 1, 0)) as Female, 
COUNT(1) as total FROM detailed_results 
GROUP BY Case 
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) < 1 then '<1'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 1 and 4 then '1-4'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 5 and 9 then '5-9'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 10 and 14 then '10-14'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 15 and 19 then '15-19'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 20 and 24 then '20-24'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 25 and 29 then '25-29'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 30 and 34 then '30-34'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 35 and 39 then '35-39'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 40 and 44 then '40-44'
when TIMESTAMPDIFF(YEAR, `Dob`, NOW()) between 45 and 49 then '45-49'
else '>50' END  
ORDER BY `Male` ASC";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
                            
?>
									Cras justo odio
									<span class="badge badge-primary badge-pill">14</span>
								</li>
							</ul>
						</div>
					</div>
				
			</div>
			<?php include 'footer.php'; ?>
		</div>
	</div>


				<!-- Simple Datatable End -->
				<!-- multiple select row Datatable start -->
				<!-- Export Datatable start -->
				<!-- Export Datatable End -->
			
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>
</html>