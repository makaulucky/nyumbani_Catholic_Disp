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
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">Hi, <?php echo "$User_Name";
						?>
							Welcome to<div class="weight-600 font-30 text-blue">NYUMBANI CATHOLIC DISPENSARY</div>
						</h4>
						<p class="font-18 max-width-600"></p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">

<?php 

 include 'dbconfig.php';
$result2 = mysqli_query($con,"SELECT COUNT(*) FROM admission ");

$row = mysqli_fetch_assoc($result2);
$size = $row['COUNT(*)'];

echo $size;
?>

								</div>
								<div class="weight-600 font-14">Current Active</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart2"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">
								<?php 

include 'dbconfig.php';
$result2 = mysqli_query($con,"SELECT COUNT(*) FROM detailed_results WHERE viral_load <1000 ");


$row = mysqli_fetch_assoc($result2);
$size = $row['COUNT(*)'];

echo $size;
?>
							
								
								
								
								</div>
								<div class="weight-600 font-14">Suppressed</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart3"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"></div>


								<?php 

include 'dbconfig.php';
$result2 = mysqli_query($con,"SELECT COUNT(*) FROM detailed_results WHERE viral_load >1000 ");


$row = mysqli_fetch_assoc($result2);
$size = $row['COUNT(*)'];

echo $size;
?>




								<div class="weight-600 font-14">With High VL</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart4"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">2</div>
								<div class="weight-600 font-14">Recent Exits</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xl-8 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Activity</h2>
						<div id="chart5"></div>
					</div>
				</div>
				<!--div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Set Target</h2>
						<div id="chart6"></div>
					</div>
				</div>-->
			</div>
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">Recent CCC Activities</h2>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">Client</th>
							<th>Full Name</th>
							<th>Age</th>
							<th>Regimen</th>
							<th>Viral Load</th>
							<th>CD4</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
				</table>
			</div>
			<?php include 'footer.php'; ?>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
	
</body>
</html>