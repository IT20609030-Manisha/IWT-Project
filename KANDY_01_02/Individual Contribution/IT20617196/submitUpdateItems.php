<?php
	
	require 'config.php';
	 
	$id =$_POST["field1"];
	$type =$_POST["field2"];
	$route = $_POST["field3"];
	$duration =$_POST["field4"];
	$amount= $_POST["field5"];
	$packageid= $_POST["field6"];
	
	$sql ="UPDATE package SET package_ID='$id' , package_type='$type', route='$route',
	                       duration='$duration', amount='$amount'
						   WHERE package_id='$packageid'";
						   
	if ($con -> query($sql))
	{
		echo "<script> alert ('Record Updated Successfully') </script>";
		header("Location:indextour.php");
	}
	
	else
	{
		echo "error".$con->error;
		echo"<script> alert('Error Updating !!!')</script>";
	}
	
	$con ->close();
	
	?>


?>