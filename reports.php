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
								<h4>ART REPORT</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Report</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							
						</div>
					</div>
				</div>

				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">TX Curr Report</h4>
							<p>A projection on clients under care in each age group.</p>
						</div>
						<div class="pull-right">
							<a href="#download" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class=""></i> Download</a>
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

<!--Report Table starts here-->

<?php 
include 'dbconfig.php';

$query = "select * FROM summary_report";
$result = mysqli_query($con,$query); 

echo "<div class=\"table-responsive\">
	<table class=\"table table-striped\">
	  <thead>
	    <tr>
	      <th scope=\"col\">Age Group</th>
		  <th scope=\"col\">Male</th>
		  <th scope=\"col\">Female</th>
		  <th scope=\"col\">Total</th>
	    </tr>
	  </thead>
	  <tbody>";
while($row=mysqli_fetch_array($result))
                            {          
                                $Age_Group=$row['Age_Group']; 
								$Male=$row['Male']; 
								$Female=$row['Female']; 
								$total=$row['total']; 

	     echo "<tr>
	      <th scope=\"row\">$Age_Group</th>
		  <th scope=\"row\">$Male</th>
		  <th scope=\"row\">$Female</th>
		  <th scope=\"row\">$total</th>
	      </tr>";
		}

	 echo "</tbody>
	</table>"
	?>
</div>
						
<!--Report Table ends here-->
				
			</div>
			<?php include './includes/footer.php'; ?>
		</div>
	</div>

	
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>
</html>