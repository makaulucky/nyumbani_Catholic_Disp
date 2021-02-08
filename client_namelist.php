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
								<h4>DataTable</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">All Clients</li>
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
						<h4 class="text-blue h4">Client List</h4>
					</div>
					<div class="pb-20">



<?php
include 'dbconfig.php';


$query = "select * FROM admission";
$result = mysqli_query($con,$query); 

echo "	<table id=\"editableTable\" class=\"table hover multiple-select-row data-table-export nowrap\">
							 <thead>
								 <tr>
									 <th class=\"table-plus datatable-nosort\">CCC NO</th>
									 <th>Name</th>
									 <th>Phone N0</th>
									 <th>Gender</th>
									 <th>Residence</th>
									 <th>DoB</th>
									 <th>ID N0</th>
									 <th>Reg_date</th>						 
								 </tr>
							 </thead>
							 <tbody>";
while($row=mysqli_fetch_array($result))
                            {          
                                $ccc_no=$row['ccc_no']; 
								$Fname=$row['Fname']; 
								$Mname=$row['Mname']; 
								$Lname=$row['Lname']; 
								$Phone_no=$row['Phone_no']; 
								$Gender=$row['Gender'];
								$Residence=$row['Residence'];
								$Dob=$row['Dob'];
								$Id_no=$row['Id_no'];
								$Reg_date=$row['Reg_date'];
							echo "         
								<tr>
									<td class=\"table-plus\">$ccc_no</td>
									<td><a href=results_entry.php?ccc_no=$ccc_no data-toggle=\"tooltip\" data-placement=\"top\" title=\"Update Client's Results\">

									$Fname $Mname $Lname  </a></td>
									<td>$Phone_no</td>
									<td>$Gender</td>
									<td>$Residence</td>
									<td>$Dob</td>
									<td>$Id_no</td>
									<td>$Reg_date</td>
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