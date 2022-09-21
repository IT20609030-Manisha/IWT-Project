<?php
	include 'config.php';
?>

<html>
<head>
	<title> Ride Zone </title>
	
	<link rel="stylesheet" href="css/styles3.css">
	<link rel="stylesheet" href="css/resetpwdstyles.css">
	
</head>

<body>
	<!--header-->
	<div id="head">
	<!--logo-->
	<img src="images/logo2.png.png" alt="logo" id="logo">
	
	
	<!--login image-->
	<img src = "images/login.jpeg" class="login" align="right">
	
	
	<!--login-->
	<!--<br><br><p align="right"><a href="#login page"> Login / Sign-Up </a></p>-->
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
	
	<div id="forgotpwdsection">
	
		<p><h3>If you forgot your password follow these steps!!!!!</h3></p><br>
		
		<form action="ResetPassword.php" method="post">
	
		<p><b> 1. **Please enter First name and Mobile Number that you used to register to the system**</b></p><br>
		
		<input type="text" name="FirstN" placeholder="Enter Your Name" required> &emsp; &emsp;
		<input type="tel" name="mobi" placeholder="Enter Your Mobile Number" pattern="[0-9]{10}" required><br><br> 
		
		<p><b>2. **Please enter new password**</b></p><br>
		
		<input type="password" name="pwdforgot" id="pwdforgot" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" title="" required><br>
		<p><b>Your Password should have 5-10 chracters and INCLUDE chracters, Capital letters & simple letters</b></p><br><br>
		
		<input id="restbtn" type="submit" value="Reset Password">
			
		</form>
	</div>
	
	
	
	
	<hr>
	<!--footer-->
	
	<footer>
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
	</footer>
</body>
</html>