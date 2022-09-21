<?php
   session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title> Ride Zone </title>
	
	
	<link rel="stylesheet" href="css/styles3.css">
	<link rel="stylesheet" href="css/welcomestyles.css">
	
	
	
</head>

<body id="welcome">
	<!--header-->
	<div id="head">
	<!--logo-->
	<img src="images/logo2.png.png" alt="logo" id="logo">
	
	
	<!--login image-->
	<img src = "images/login.jpeg" class="login" align="right">
	
	
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
	
	<br><br>
	
	<h2 font-color="#ffffff"><center>Welcome <?php echo $_SESSION['logged_user']; ?></center></h2><br><br>
	
	
	
	<a href="indextour.php" ><h2>Add Tour Packages</h2></a><br><br>
	<a href="pravailable.php" ><h2>View Vehicles</h2></a><br><br>
	<a href="viewCustomerDetails.php" ><h2>View Customer Details</h2></a><br><br>
	
	
	
	
	<hr>
	<!--footer-->
	
	<footer>
	<div>
		
		<div>
		
		<!--facebook logo-->
		<a href = "https://www.facebook.com"><img src="images/fb.jpeg" alt="fb" id="fb"></a>
		
		<!--instagram logo-->
		<a href = "https://www.instagram.com"><img src="images/inst.jpeg" alt="instr" id="inst"></a>
		
		<!--twitter logo-->
		<a href = "https://twitter.com"><img src="images/twitter.png" alt="twitter" id="twit"></a>
		
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
		</div>
	</div>
	</footer>
</body>
</html>