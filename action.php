<?php
include_once("dbconfig.php");
if ($_POST['action'] == 'edit' && $_POST['id']) {	
	$updateField='';
	if(isset($_POST['Fname'])) {
		$updateField.= "Fname='".$_POST['Fname']."'";
	} else if(isset($_POST['gender'])) {
		$updateField.= "gender='".$_POST['gender']."'";
	} else if(isset($_POST['age'])) {
		$updateField.= "age='".$_POST['age']."'";
	}
	if($updateField && $_POST['id']) {
		$sqlQuery = "UPDATE results SET $updateField WHERE id='" . $_POST['id'] . "'";	
		mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));	
		$data = array(
			"message"	=> "Record Updated",	
			"status" => 1
		);
		echo json_encode($data);		
	}
}
if ($_POST['action'] == 'delete' && $_POST['id']) {
	$sqlQuery = "DELETE FROM results WHERE id='" . $_POST['id'] . "'";	
	mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));	
	$data = array(
		"message"	=> "Record Deleted",	
		"status" => 1
	);
	echo json_encode($data);	
}
?>