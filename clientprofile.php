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
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Client History</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="labresults.php">Lab Client List</a></li>
									<li class="breadcrumb-item active" aria-current="page">Client History</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-photo">
								<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
								<img src="vendors/images/client.png" alt="" class="avatar-photo">
								
							</div>
							
                                
<?php
include 'dbconfig.php'; 
$ccc_no=$_GET['ccc_count'];
$query = "select * FROM detailed_results WHERE ccc_no='$ccc_no'";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
                            {          
                                $ccc_no=$row['ccc_no']; 
                                $Fname=$row['Fname']; 
                                $Lname=$row['Lname'];
                                $Gender=$row['Gender'];
                                $art_regimen=$row['art_regimen'];
								$Dob=$row['Dob'];
								$years=$row['years'];
								$months=$row['months'];
                                $mstari=$row['mstari'];
                                
							}
?>
								
                             
							<p class=" text-muted font-14"></p>
							<div class="profile-info">
							


								<h5 class="mb-20 h5 text-blue "></h5>
								<p class="text-muted font-14">Name:
								<?php 
								echo "$Fname $Lname"; 
								?>
								</p>
								
								<p class="text-muted font-14">DoB:
								<?php 
								echo "$Dob";
								?> 
								</p>
								<p class="text-muted font-14">Age:
								<?php 
								echo "$years Yr(s) $months Month(s)";
								?> 
                                </p>
                                <p class="text-muted font-14">Gender:
								<?php 
								echo "$Gender";
								?> 
                                </p>
                                <p class="text-muted font-14">Regimen:
								<?php 
								echo "$art_regimen";
								?> 
                                </p>
                                <p class="text-muted font-14">Line:
								<?php 
								echo "$mstari";
								?> 
								</p>
								
							</div>
							
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="card-box height-100-p overflow-hidden">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										
										<li class="nav-item">
											<a class="nav-link" role="tab">Client's Results</a>
										</li>
									</ul>
									<div class="tab-content">
										

										<!-- Setting Tab start -->
										<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
											<div class="profile-setting">

		
											</div>
										</div>
									<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">ALL HISTORY</h4>
					</div>
					<div class="pb-20">



<?php
include 'dbconfig.php';


$query = "select * FROM detailed_results WHERE ccc_no='$ccc_no'";
$result = mysqli_query($con,$query); 

echo "	<table id=\"editableTable\" class=\"table hover multiple-select-row data-table-export nowrap\">
							 <thead>
								 <tr>
									 <th class=\"table-plus datatable-nosort\">CCC N0</th>
									 <th>Date</th>
									 <th>Viral Load</th>
									 <th>CD4</th>
									 
									 
									 					 
								 </tr>
							 </thead>
							 <tbody>";
while($row=mysqli_fetch_array($result))
                            {          
                                $ccc_no=$row['ccc_no'];
								$current_art_date=$row['current_art_date']; 
								$viral_load=$row['viral_load'];
								$cd4=$row['cd4'];
								
								
							echo "         
								<tr>
									<td class=\"table-plus\">$ccc_no</td>
									<td>$current_art_date</a></td>
									<td>$viral_load</td>
									<td>$cd4</td>
									
								</tr>";
					}
					echo "	</tbody>
					</table>";
?>
			</div>
		</div>
                <!-- Export Datatable End -->
                	<!-- Setting Tab End -->
					
										
									</div>
								</div>
							</div>
						</div>
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
	<script src="src/plugins/cropperjs/dist/cropper.js"></script>
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

</body>
</html>