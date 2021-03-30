<?php
$con = @mysqli_connect("localhost","root","","clinic_db");
  if(!$con)
	  {
	  die(mysqli_error());
	  }
mysqli_select_db($con,"clinic_db");

?>