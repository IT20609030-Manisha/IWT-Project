<?php

	require 'config.php';
	
	$Vehicle_Number = $_POST["Vnum"];
	$Vehicle_type = $_POST["Vtype"];
	$Colour = $_POST["Vcolour"];
	$Brand = $_POST["Vbrand"];
	$Location = $_POST["loc"];
	$No_Of_Passengers = $_POST["Vpss"];
	$No_Of_Luggages = $_POST["Vlug"];
	$AC_status = $_POST["ACs"];
	$Owner_Name = $_POST["OFname"];
	$Owner_Contact = $_POST["tel"];
	$Vehicle_Id = $_POST["Vehicle_Id"];
	
	$sql = "UPDATE vehicles SET Vehicle_Number='$Vehicle_Number', Vehicle_type ='$Vehicle_type',
			Colour='$Colour' , Brand='$Brand' ,Location ='$Location', No_Of_Passengers=$No_Of_Passengers, No_Of_Luggages=$No_Of_Luggages,
			AC_status='$AC_status', Owner_Name='$Owner_Name', Owner_Contact='$Owner_Contact'
			WHERE Vehicle_ID = '$Vehicle_Id'";
						
	if($con -> query($sql))
	{
		echo "<script> alert('Record Updated Successfully') </script>";
		header("Location:pravailable.php");
	}
	else
	{
	   echo "error".$con->error;
	   echo "<script> alert('Error updating!!!')</script>";
	}
	
	$con -> close();

?>