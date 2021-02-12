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


<?php
include 'dbconfig.php'; 
$ccc_no=$_GET['ccc_no'];
$query = "select * FROM summary_report ";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
                            
{  
$Age_Group=  mysqli_real_escape_string($con, $row['Age_Group']);                          
$Male= mysqli_real_escape_string($con,  $row['Male']); 
$Female= mysqli_real_escape_string($con, $row['Female']);
$total= mysqli_real_escape_string($con, $row['total']);
}
?>   




<?php
include 'dbconfig.php';


$query = "select * FROM summary_report";
$result = mysqli_query($con,$query); 

echo "	<table id=\"editableTable\" class=\"table hover multiple-select-row data-table-export nowrap\">
							 <thead>
								 <tr>
									 <th class=\"table-plus datatable-nosort\">Age Group</th>
									 <th>Male</th>
									 <th>Female</th>
									 <th>total</th>					 
								 </tr>
							 </thead>
							 <tbody>";
while($row=mysqli_fetch_array($result))
                            {          
                                $Age_Group=$row['Age_Group']; 
								$Male=$row['Male']; 
								$Female=$row['Female']; 
								$Lname=$row['total']; 
								
								

							echo "         
								<tr>
									<td class=\"table-plus\">$Age_Group</td>
									<td>$Male</td>
									<td>$Female</td>
									<td>$total</td>
									
								</tr>";
					}
					echo "	</tbody>
					</table>";
?>






				
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