<?php 
include '../config/dbconnection.php';

if (isset($_GET['deleteId'])) {

	// code...
	$id=$_GET['deleteId'];

	$sql = "DELETE FROM `blogpost` WHERE id=$id";
	$result= mysqli_query($con,$sql);

	if ($result) {
		// code...
		
		header("Location:admin-index.php");
	}

}


?>