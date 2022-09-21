<?php
	
	session_start();
	
	require 'config.php';
	
	
	//read the values in fields - edidRcord file
	
	//store data in separate variables
	$fName = $_POST["txtfname"];
	$lName = $_POST["txtlname"];
	$gender = $_POST["gender"];
	$dob = $_POST["dob"];
	$mobile = $_POST["txtmobile"];
	$email = $_POST["email"];
	$password = $_POST["password"]; 
	$cId= $_POST["cid"]; 
	
	//sql query to update values
	$sql = "UPDATE customer SET firstName = '$fName' , lastName = '$lName' , gender = '$gender' ,
								dateOfBirth = '$dob' , mobileNo = '$mobile' , email = '$email' , password = '$password'
										
							where customer_ID = $cId" ;
						
	
	if ($con -> query($sql))
	{
		echo "<script> alert('Record Updated Successfully')</script>" ;
		header("Location:MyProfile.php");
	}
	else
	{
		echo "error".$con->error; //show the error
		
		echo "<script> alert('Error Updating!!!')</script>";
	}
	
	$con -> close();
	
	//change the session pwd to new password
	$_SESSION['pwd'] = $password ;
	
	

?>

