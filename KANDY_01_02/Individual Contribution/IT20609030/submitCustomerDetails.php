<?php

	require 'config.php';
	
	//store data in separate variables
	$fName = $_POST["txtfname"];
	$lName = $_POST["txtlname"];
	$gender = $_POST["gender"];
	$dob = $_POST["dob"];
	$mobile = $_POST["txtmobile"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	//insert data
	$sql = "INSERT INTO customer(customer_ID, firstName, lastName, gender, dateOfBirth, mobileNo, email, password )
			Value ('', '$fName', '$lName', '$gender', '$dob', '$mobile', '$email', '$password' )";
			
			
	
	//execute insert query
	if($con -> query($sql))
	{
		header("Location:Login.php");
		echo "<script>alert('Your Registration successfull!!! Welcome To RideZone')</script>";
	}
	else
	{
		echo "<script>alert('error inserting!!!')</script>";
	}
	
	//close the cnnection
	$con->close();

?>