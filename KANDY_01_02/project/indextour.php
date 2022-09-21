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
	<br><br><p align="right" id="para"><a href="Login.php"> Login / Sign-Up </a></p>
	
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
	
	<button id="btnAdditem"> <a href="additems.html"> Add Item </a></button>
	
	<center>
	<div>
	<table border="1">
	<tr>
	
	<th>Package ID</th>
	<th>Package Type</th>
	<th>Route</th>
	<th>Duration</th>
	<th>Amount</th>
	<th>Edit</th>
	<th>Delete</th>
	
	</tr>
	</div>
	</center>
	
	<?php
	
		$sql="SELECT package_ID ,package_type, route, duration, amount FROM package";
		
		$result =$con ->query($sql);
		
		if($result ->num_rows>0)

		{
			while($row =$result -> fetch_assoc())
			{
				$id= $row["package_ID"];
				echo "<tr> <td>".$row["package_ID"]."</td>";
				echo"<td>".$row["package_type"]."</td>";
				echo"<td>".$row["route"]."</td>";
				echo"<td>".$row["duration"]."</td>";
				echo"<td>".$row["amount"]."</td>";
				echo"<td><button type='submit'><a href='EditRecord.php?id=$id'>Edit</a></button> </td>";
				echo"<td><button type='submit'><a href='DeleteRecord.php?id=$id '>Delete</a> </button></td> </tr>";
			}
		}
		else
		{
			echo "0 result";
		}
		
	echo "</table>";

	$con ->close();
?>	
<br>  <br> <br> <br>  <br> <br> <br>  <br> <br> <br>  <br> <br> <br>  <br> <br> <br>  <br> 

<hr>

	<!--footer-->
	
	<footer>
	
	<div>
		
		
		<!--facebook logo-->
		<a href = "https://www.facebook.com"><img src="images/fb.jpeg" alt="fb" id="fb" align="left";></a>
		
		<!--instagram logo-->
		<a href = "https://www.instagram.com"><img src="images/inst.jpeg" alt="instr" id="inst" align="left" ></a>
		
		<!--twitter logo-->
		<a href = "https://twitter.com"><img src="images/twitter.png" alt="twitter" id="twit" align="left"></a>
		
		<!--google palay store logo-->
		<a href = "https://play.google.com"><img src="images/gplaynew.jpg" alt="play store" id="google" align="right" ></a>
		
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
	
	</footer>
	
</body>
</html>
	



