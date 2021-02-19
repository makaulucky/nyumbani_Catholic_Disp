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
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Archive</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">All History</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-2">
						<h4 class="text-blue h4">Name List</h4>
				</div>




<?php
					include 'dbconfig.php';
                          
                             $query = "select * FROM  detailed_results";
							 $result = mysqli_query($con,$query);
							 
							 echo "	<table class=\"table hover multiple-select-row data-table-export nowrap\" id=\"editableTable\">
							 <thead>
								 <tr>
									 <th class=\"table-plus datatable-nosort\">CCC N0</th>
									 <th>Name</th>
									 <th>GND</th>
									 <th>Age</th>
									 <th>Regimen</th>
									 <th>Facil ART DT</th>
									 <th>Pre VL DT</th>
									 <th>Pre VL</th>
									 <th>VL Date</th>
									 <th>VL</th>
									 <th>CD4</th>
									 <th>Line</th>
									 <th>Residence</th>
									 
									 
								 </tr>
							 </thead>
							 <tbody>";



                            while($row=mysqli_fetch_array($result))
                            {  
                               
                                $ccc_count=$row['ccc_count']; 
								$Fname=$row['Fname']; 
								$Mname=$row['Mname']; 
								$Lname=$row['Lname']; 
								$Gender=$row['Gender'];
								$years=$row['years'];
								$art_regimen=$row['art_regimen'];
								$current_art_date=date("d-M-Y", strtotime($row['current_art_date']));
								$pre_vl_date=$row['pre_vl_date'];
								$pre_vl_results=$row['pre_vl_results'];
								$curr_vl_date=$row['curr_vl_date'];
								$viral_load=$row['viral_load'];
								$cd4=$row['cd4'];
								$mstari=$row['mstari'];
								$Residence=$row['Residence'];

								echo "   
								<tr>
									<td class=\"table-plus\">$ccc_count</td>
									
									<td><a href=clientprofile.php?ccc_count=$ccc_count data-toggle=\"tooltip\" data-placement=\"top\" title=\"View all History\">
									$Fname $Mname $Lname</td>
									<td>$Gender</td>
									<td>$years</td>
									<td>$art_regimen</td>
									<td>$current_art_date</td>
									<td>$pre_vl_date</td>
									<td>$pre_vl_results</td>
									<td>$curr_vl_date</td>
									<td>$viral_load</td>
									<td>$cd4</td>
									<td>$mstari</td>
									<td>$Residence</td>
									
									
								</tr>";
		
					}

					echo 
					"</tbody></table>";
					?>

					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
			<?php include './includes/footer.php'; ?>
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