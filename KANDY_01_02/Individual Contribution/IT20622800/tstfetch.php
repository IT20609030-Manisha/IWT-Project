<?php

    require 'config.php';
	
	    $Pick_Up_Location  = $_POST['txtplocation'];
		$Pick_Up_Date = $_POST['pick-update'];
		$Pick_Up_Time = $_POST['pick-uptime'];
		$Drop_Location  = $_POST['txtdlocation'];
		$Drop_Date  = $_POST['dropdate'];
		$Drop_Time = $_POST['droptime']; 
	
	//insert data
	$sql = "INSERT INTO ride_zone (Pick_Up_Location,Pick_Up_Date,Pick_Up_Time,Drop_Location,Drop_Date,Drop_Time)
         VALUES ('$Pick_Up_Location','$Pick_Up_Date','$Pick_Up_Time', '$Drop_Location','$Drop_Date','$Drop_Time')";
			
			
	if($con -> query($sql))	
    {
		header("Location:confirm.php");
	}
    else
    {
		echo "<script> alert('error inserting !!!')</script>";
	}		

    $con ->close();
?>