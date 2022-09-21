<?php

	require 'config.php';
	
	//store data in separate variables
	$Vehicle_Number = $_POST["Vnum"];
	$vehicle_type = $_POST["Vtype"];
	$Colour = $_POST["Vcolour"];
	$Brand = $_POST["Vbrand"];
	$Location = $_POST["loc"];
	$No_Of_Passengers = $_POST["Vpss"];
	$No_Of_Luggages = $_POST["Vlug"];
	$AC_status = $_POST["ACs"];
	$Owner_Name = $_POST["OFname"];
	$Owner_Contact = $_POST["tel"];
	
	//insert data
	$sql = "INSERT INTO vehicles(Vehicle_ID, Vehicle_Number, vehicle_type, Colour, Brand, Location, No_Of_Passengers, No_Of_Luggages, AC_status, Owner_Name, Owner_Contact )
			Value ('', '$Vehicle_Number', '$vehicle_type', '$Colour', '$Brand', '$Location', $No_Of_Passengers, $No_Of_Luggages, '$AC_status', '$Owner_Name', '$Owner_Contact' )";
			
			
	
	//execute inser query
	if($con -> query($sql))
	{
		header("Location:pravailable.php");
	}
	else
	{
		echo "<script>alert('Please fill all the fields!!!')</script>";
	}
	
	//close the cnnection
	$con->close();

?>