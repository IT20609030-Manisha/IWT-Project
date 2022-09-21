<?php

    require 'config.php';

?> 
	



<html>
<head>
	<title> Ride Zone </title>
	<link rel="stylesheet" href="css/prstyles.css">
	<link rel="stylesheet" href="css/confirm.css">
	<link rel="stylesheet" href="css/header.css">
	
</head>

<body>
	<!--header-->
	<div id="head">
	<!--logo-->
	<img src="images/logo.png" alt="logo" id="logo">
	
	
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
	<div style="background-image: url('images/ccc.jpg');" >
	
	<div class ="containe">
			<div class="box">
				<div class="icon">01</div>
				<div class="content">
					<h3>Tuk-Tuk</h3>
					<p> Rs.300/= </p>
					
					<a class="b" href="Payment1.php">Confirm Booking</a>
				</div>
			</div>
			<div class="box">
				<div class="icon">02</div>
				<div class="content">
					<h3>Car</h3>
					<p> Rs.1000/= </p>
					
					<a class="b" href="Payment1.php">Confirm Booking</a>
				</div>
			</div>
			<div class="box">
				<div class="icon">03</div>
				<div class="content">
					<h3>Van</h3>
					<p> Rs.2500/= </p>
					
					<a class="b" href="Payment1.php">Confirm Booking</a>
				</div>
			</div>
			<div class="box">
				<div class="icon">04</div>
				<div class="content">
					<h3>Bus</h3>
					<p> Rs.5000/= </p>
				
					<a class="b" href="Payment1.php">Confirm Booking</a>
				</div>
			</div>
		</div>
		
	 <div>
       <button class="sub" type="submit"> <a href="vehicle.php"><b> Change Booking </b></a> </button> 
       <button class="sub" type="submit"> <a href="vehicle.php"><b> Cancel Booking </b></a> </button> 
     </div>	
		
    </div>
     
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
	</div>
	</footer>
</body>
</html>	