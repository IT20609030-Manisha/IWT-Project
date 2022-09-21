<?php
	require 'config.php';
	
	$Method=$_POST["1"];
	$Card_Number=$_POST["4"];
	$CVV=$_POST["3"];
	$Expiry_Date=$_POST["5"];
	$Payment_ID=$_POST["Payment_ID"];
	
	$sql="UPDATE payment SET Method='$Method', Card_Number='$Card_Number', CVV=$CVV, Expiry_Date='$Expiry_Date'
		WHERE Payment_ID = '$Payment_ID'";
		
	if ($con->query($sql))
	{
		header ("Location:Payment_Table.php");
	}
	else
	{
		echo"<script>alert('error')</script>";
	}
	
		
	$con->close();
	
?>
	
	