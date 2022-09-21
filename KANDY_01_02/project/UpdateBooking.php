<?php

    require 'config.php';

?> 

<html>
<head>
	<title> Ride Zone </title>
	<link rel="stylesheet" href="css/prstyles.css">
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
	<br>
	  <?php
		
		    $recordID = $_GET['id'];
		    
		    $sql = "SELECT * FROM ride_zone where Booking_ID = $recordID";
		
		
		    $result = $con -> query($sql); 
		
		    if($result -> num_rows > 0)
			{
				while($row = $result -> fetch_assoc())
				{
					$Pick_Up_Location  = $row['Pick_Up_Location'];
		            $Pick_Up_Date = $row['Pick_Up_Date'];
		            $Pick_Up_Time = $row['Pick_Up_Time'];
		            $Drop_Location  = $row['Drop_Location'];
		            $Drop_Date  = $row['Drop_Date'];
		            $Drop_Time = $row['Drop_Time'];
					$Booking_ID = $row['Booking_ID'];
				}
			}
			else
			{
				echo "0 records ";
			}
		?>
		
    <br>
	    <form method="POST" action="SubmitUpdate.php" ><br>
		
		    <h2> Book Your Ride </h2> <br><br>
		    
	        <label>Pick-up Location </label><br>
	        <input type="text" name="txtplocation" value=<?php echo $Pick_Up_Location ;?> placeholder="Pick-up Location" required><br><br>
			
			<label>Pick-up Date and Time </label><br>
	        <input type="date" name="pick-update" value=<?php echo $Pick_Up_Date; ?>  required> 
			<input type="time" name="pick-uptime" value=<?php echo $Pick_Up_Time ;?> required><br><br>
			
			<label>Drop Location </label><br>
	        <input type="text" name="txtdlocation" value=<?php echo $Drop_Location; ?> placeholder="Drop Location" required><br><br>
			
			<label>Drop Date and Time </label><br>
	        <input type="date" name="dropdate" value=<?php echo $Drop_Date; ?>  required> 
			<input type="time" name="droptime" value=<?php echo $Drop_Time ;?> required><br><br>
			
			<!--add hidden field-->
			<input type="hidden" name="Booking_ID" value=<?php echo $Booking_ID ;?>>
			
			
			<center>
			  
		      <input type="submit" value="UPDATE"   >
	        </center>
	    </form>
		
	  	<br><br>
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
	</div>
	</footer>
</body>
</html>