<?php

		require 'config.php';
		
		$FirstN = $_POST["FirstN"];
		$mobi = $_POST["mobi"];
		$pwdf = $_POST["pwdforgot"];
		
		
		//sql query to update values
		$sql = "UPDATE customer SET password = '$pwdf'
										
				where firstName= '$FirstN' and mobileNo= '$mobi'" ;
						
	
	if ($con -> query($sql))
	{
		echo "<script> alert('Password Rest Successfully')</script>" ;
		header("Location:Login.php");
	}
	else
	{
		echo "error".$con->error; //show the error
		
		echo "<script> alert('Your Details Cannot be found or Error Resetting!!!')</script>";
	}
	
	$con -> close();

?>