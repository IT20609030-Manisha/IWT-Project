<?php
	
	include 'config.php';
	
	$recordId = $_GET['id'];
	
	$sql = "DELETE FROM Vehicles WHERE Vehicle_Id ='$recordId'";
	
	if($con -> query($sql))
	{
		echo "<script> alert('record delete successfully !!')</script>";
		header("Location:pravailable.php");
	}	
	else
	{
		echo "<script> alert('ERROR DELETING')</script>";
	}

	$con -> close();


?>