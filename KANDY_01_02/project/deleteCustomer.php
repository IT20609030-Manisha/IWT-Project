<?php

	include 'config.php';
	
	//get record id pass with the url
	$recordId = $_GET['id'];
	
	//sql statment
	$sql = "DELETE FROM customer WHERE customer_ID = '$recordId'" ;
	
	//execute
	if($con -> query($sql))
	{
		echo "<script>alert('Record Delete Successfully!!')</script>";
		header("Location:Login.php");
	}
	else
	{
		echo "<script>alert('ERROR DELETING')</script>";
	}
	
	//close the conncection
	$con -> close();

?>