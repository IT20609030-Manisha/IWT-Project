<?php
	require 'config.php';
	
	$Method=$_POST["1"];
	$Card_Number=$_POST["4"];
	$CVV=$_POST["3"];
	$Expiry_Date=$_POST["5"];
	
	$sql="INSERT INTO payment (Payment_ID, Method, Card_Number, CVV, Expiry_Date)
		values ('', '$Method', '$Card_Number', $CVV, '$Expiry_Date')";
		
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
	
	