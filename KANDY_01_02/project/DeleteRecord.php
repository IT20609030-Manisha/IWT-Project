<?php
	include 'config.php';
	
	$recordId=$_GET['id'];
	
	$sql="DELETE FROM package WHERE package_id='$recordId'";
	
	if($con -> query($sql))
	{
		echo"<script> alert ('record delete successfully !!')</script>";
		header("Location:indextour.php");
		
	}
	else
	{
		echo"<script> alert ('ERROR DELETING')</script>";
	}
	
	$con -> close();



?>