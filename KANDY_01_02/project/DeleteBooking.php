<?php

	include 'config.php';
	
	$recordId = $_GET['id'];
	
	$sql = "DELETE FROM ride_zone WHERE Booking_ID ='$recordId'";
	
	if($con -> query($sql))
	{
		echo "<script> alert('record delete successfully !!')</script>";
		header("Location:bookings.php");
	}	
	else
	{
		echo "<script> alert('ERROR DELETING')</script>";
	}

	$con -> close();


?>