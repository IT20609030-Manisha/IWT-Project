<?php

	require 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title> Ride Zone </title>
	<link rel="stylesheet" href="css/new.css">
	<link rel="stylesheet" href="css/tourpackages.css">
	<link rel="stylesheet" href="css/additems.css">
	
</head>
   
   
   
<body>
	<!--header-->
	<div id="head">
	<!--logo-->
	<img src="images/logo.jpeg" alt="logo" id="log1">
	
	
	<!--login image-->
	<img src = "images/log.png" class="login" align="right">
	
	<!--login-->
	<br><br><p align="right"><a href="Login.php"> Login / Sign-Up </a></p>
	
	<!--header-->

	
	<!--Navigation bar-->
	<ul class="menu">
		    <li class="menu"> <a href="Home NEW.html" >Home </a></li>
			<li class="menu"> <a href="pravailable.php" >Vehicles </a></li>
			<li class="menu"> <a href="Bookings.php" >Bookings </a></li>
			<li class="menu"> <a href="tourpackage.html" >Tour Packages </a></li>
	</ul>
	</div>
	
	<center> <h2> Tour Packages</h2> </center>
	
<?php

	$recordId =$_GET['id'];
	
	$sql="SELECT * FROM package where package_ID =$recordId";
	
	$result =$con ->query($sql);
	
	if($result !== false && $result ->num_rows>0)

	{
		while($row= $result -> fetch_assoc())
		{
			$id= $row["package_ID"];
			$type= $row["package_type"];
			$route= $row["route"];
			$duration= $row["duration"];
			$amount= $row["amount"];
			$packageid= $row["package_ID"];
		}
		
	}	
	
	else
	{
		echo "0 records";
	}
?>	
	<center>
	<form method="POST" action="submitUpdateItems.php"> 

		
		Package ID <br>
		<input type="text" name="field1" value=<?php echo $id ?>> <br> <br> 
		
		Package Type <br>
		<input type="text" name="field2" value=<?php echo $type?>> <br> <br>
		
		Route <br>
		<input type="text" name="field3" value=<?php echo $route?>> <br> <br>
		
		Duration <br>
		<input type="text" name="field4" value=<?php echo $duration?>> <br> <br>
		
		Amount <br>
		<input type="text" name="field5" value=<?php echo $amount?>> <br> <br>
		
		
		<input type="hidden" name="field6" value=<?php echo $packageid?>> 
		
		<input type="submit" value="Update Item">
		
		
	</form>	
	</center>

<footer>
	<div>
	<br>
		
		<!--facebook logo-->
		<a href = "https://www.facebook.com"><img src="images/fb.jpeg" alt="fb" id="fb" align="left"></a>
		
		<!--instagram logo-->
		<a href = "https://www.instagram.com"><img src="images/inst.jpeg" alt="instr" id="inst" align="left"></a>
		
		<!--twitter logo-->
		<a href = "https://twitter.com"><img src="images/twitter.png" alt="twitter" id="twit" align="left"></a>
		
		<!--google palay store logo-->
		<a href = "https://play.google.com"><img src="images/gplaynew.jpg" alt="play store" id="google" align="right"></a>
		
		<!--apple app logo-->
		<a href = "https://www.apple.com"><img src="images/applenew.jpeg" alt="apple app store" id="apple" align="right"></a>
		
		<div class="link">
		        <!-- about us-->
				<a href="aboutus.html" class="link">About Us </a>
				
				<!--  contactus-->
				<a href="Review.html" class="link"> Contact Us </a>
				
				<!-- privacy policy-->
				<a href="privacyPolicy.html" class="link"> Privacy Policy </a>
		</div>
	</div>
	</footer>
			

</body>
</html>







