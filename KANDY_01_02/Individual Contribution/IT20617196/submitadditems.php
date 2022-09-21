<?php

	require 'config.php';
	
	
	$id =$_POST["field1"];
	$type =$_POST["field2"];
	$route = $_POST["field3"];
	$duration =$_POST["field4"];
	$amount= $_POST["field5"];
	
	//insert data
	
	$sql ="INSERT INTO package(package_ID,package_type,route,duration,amount)
			VALUES('$id','$type','$route','$duration','$amount')";	

				
			if($con ->query($sql))
			{
				header("Location:indextour.php");
			}			
			
			else
			{
				echo "<script> alert('error inserting !!!') </script>";
			}
			
			$con ->close();
			

?>