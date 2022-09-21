<?php

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="project";
	
	$con=new mysqli($servername, $username,$password ,$dbname);
	
	if($con ->connect_error)
	{
		die("connection failed !!" .$con -> connect_error);
	}
	
	else
	{
		echo"<script> alert ('connected successfully') </script>" ;
	}
?>	