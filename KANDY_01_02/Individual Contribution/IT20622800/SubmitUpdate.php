<?php

	require 'config.php';
	
	                $Pick_Up_Location  = $_POST['txtplocation'];
		            $Pick_Up_Date = $_POST['pick-update'];
		            $Pick_Up_Time = $_POST['pick-uptime'];
		            $Drop_Location  = $_POST['txtdlocation'];
		            $Drop_Date  = $_POST['dropdate'];
		            $Drop_Time = $_POST['droptime'];
					$Booking_ID = $_POST['Booking_ID'];
	
	$sql = "UPDATE ride_zone SET Pick_Up_Location='$Pick_Up_Location' ,Pick_Up_Date='$Pick_Up_Date',Pick_Up_Time='$Pick_Up_Time',Drop_Location='$Drop_Location',Drop_Date='$Drop_Date',Drop_Time='$Drop_Time'
			WHERE Booking_ID = '$Booking_ID'";
						
	if($con -> query($sql))
	{
		echo "<script> alert('Record Updated Successfully ') </script>";
		header("Location:confirm.php");
	}
	else
	{
	   echo "error".$con->error;
		//echo "<script> alert('Error updating!!!')</script>";
	}
	
	$con -> close();

?>()