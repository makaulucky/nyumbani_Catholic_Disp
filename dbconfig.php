<?php
$con = @mysqli_connect("localhost","root","","");
  if(!$con)
	  {
	  die(mysqli_error());
	  }
mysqli_select_db($con,"clinic_db");

?>