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
								<h4>Report</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">CCC Report</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
	
				<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">CCC REPORT</h4>
					</div>
					<div class="pb-20">



<?php
include 'dbconfig.php';


$query = "SELECT * FROM detailed_results WHERE ccc_count=ccc_no GROUP BY `ccc_no` ";
$result = mysqli_query($con,$query); 

echo "	<table id=\"editableTable\" class=\"table hover multiple-select-row data-table-export nowrap\">
							 <thead>
								 <tr>
									 <th class=\"table-plus datatable-nosort\">CCC N0</th>
									 <th>Name</th>
									 <th>Age</th>
									 <th>Gnd</th>
                                     <th>Date</th>
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
                                $curr_vl_date=$row['curr_vl_date'];
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
</div>
			<?php include 'footer.php'; ?>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/editable.js"></script>
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