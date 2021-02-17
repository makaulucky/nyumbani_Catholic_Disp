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
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">Hi <?php echo "$User_Name";
						?>,
							Welcome to<div class="weight-600 font-30 text-blue">NYUMBANI CATHOLIC DISPENSARY</div>
						</h4> <p  id="time"></p>
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
								<div class="weight-600 font-14">Total Case Load</div>
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
$result2 = mysqli_query($con,"SELECT count(distinct(ccc_no)) as count FROM detailed_results WHERE Curr_VL_duration <=180 order by curr_vl_date desc ");
$row = mysqli_fetch_assoc($result2);
$size = $row['count'];

echo $size;
?>
							
								</div>
								<div class="weight-600 font-14">With Valid VL Results</div>
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
$result2 = mysqli_query($con,"SELECT count(distinct(ccc_no)) as count FROM detailed_results WHERE Curr_VL_duration >=181 order by curr_vl_date desc ");
$row = mysqli_fetch_assoc($result2);
$size = $row['count'];

echo $size;
?>

								<div class="weight-600 font-14">With Invalid VL Results</div>
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
								<div class="h4 mb-0"></div>

<?php 

include 'dbconfig.php';
$result2 = mysqli_query($con,"SELECT COUNT(*) FROM results WHERE art_regimen = 'HEI' ");
$row = mysqli_fetch_assoc($result2);
$size = $row['COUNT(*)'];
echo $size;
?>
								<div class="weight-600 font-14">Exposed</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--div class="row">
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
			</!--div>
					<!-- Simple Datatable start -->
	
				<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Invalid Viral Load</h4>
					</div>
					<div class="pb-20">



<?php
include 'dbconfig.php';


$query = "SELECT * FROM detailed_results WHERE Curr_VL_duration >180 order BY curr_vl_date";
$result = mysqli_query($con,$query); 

echo "	<table id=\"editableTable\" class=\"table hover multiple-select-row data-table-export nowrap\">
							 <thead>
								 <tr>
									 <th class=\"table-plus datatable-nosort\">CCC N0</th>
									 <th>Name</th>
									 <th>Age</th>
									 <th>Gnd</th>
                                     <th>VL Date</th>
									 <th>Days</th>
                                     <th>Regimen</th>
                                     <th>Viral Load</th>
                                     <th>CD4</th>
									 <th>Line</th>						 
								 </tr>
							 </thead>
							 <tbody>";
while($row=mysqli_fetch_array($result))
                            {          
                                $ccc_no=$row['ccc_no']; 
								$Fname=$row['Fname']; 
								$Mname=$row['Mname']; 
								$Lname=$row['Lname']; 
								$years=$row['years']; 
								$Gender=$row['Gender'];
                                $curr_vl_date=date("d-M-Y", strtotime($row['curr_vl_date']));
								$Curr_VL_duration =$row['Curr_VL_duration'];
                                $art_regimen=$row['art_regimen'];
								$viral_load=$row['viral_load'];
								$cd4=$row['cd4'];
								$mstari=$row['mstari'];
							echo "         
								<tr>
									<td class=\"table-plus\">$ccc_no</td>
									<td><a href=clientprofile.php?ccc_count=$ccc_no>

									$Fname $Mname $Lname  </a></td>
									<td>$years</td>
									<td>$Gender</td>
                                    <td>$curr_vl_date</td>
									<td>$Curr_VL_duration</td>
                                    <td>$art_regimen</td>
                                    <td>$viral_load</td>
                                    <td>$cd4</td>
									<td>$mstari</td>
								</tr>";
					}
					echo "	</tbody>
					</table>";
?>
			</div>
		</div>
				<!-- Export Datatable End -->

			<?php include './includes/footer.php'; ?>
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
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script>
	<script>
var d = new Date();
document.getElementById("time").innerHTML = d;
</script>
	
</body>
</html>