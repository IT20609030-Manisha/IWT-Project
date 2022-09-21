<?php
	$servername = "localhost";
	$username = "root";
	$password = "" ;
	$dbname = "project";
	
	//configuration objects
	$con = new mysqli($servername , $username , $password , $dbname); 
	
	//check the connection
	
	if ($con -> connect_error)
	{
		die("Connection Failed!!".$con -> connect_error);
	}
	else
	{
		//cnfig file connect to database successfully
		echo "<script>alert('Connected Successfully')</script>";
	}

?>