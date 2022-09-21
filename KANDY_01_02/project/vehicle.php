<html>

<?php

    require 'config.php';

?> 



<head>
	<title> Ride Zone </title>
	<link rel="stylesheet" href="css/prstyles.css">
	<link rel="stylesheet" href="css/vehicle.css">
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
	
		
		<center>
		
		<div class="productData" id="tbl" style="border-style:groove; border-color:Pink;" >
		   <table border="1" >
		      <tr>
			      <th> Booking ID </th>
				  <th> Pick up Location </th>
				  <th> Pick up Date </th>
				  <th> Pick up time </th>
				  <th> Drop Location </th>
				  <th> Drop Date </th>
				  <th> Drop Time</th>
				  <th> Update </th>
				  <th> Delete </th>
			  </tr>
			  
			  <?php
			        
			        $sql = "SELECT Booking_ID,Pick_Up_Location,Pick_Up_Date,Pick_Up_Time,Drop_Location,Drop_Date,Drop_Time FROM ride_zone";

                    $result = $con -> query($sql);	

                    if($result -> num_rows > 0)
					{
						while($row = $result -> fetch_assoc())
						{
							$id = $row["Booking_ID"];
						    echo "<tr><td>". $row["Booking_ID"]."</td>";
							echo "<td>".$row["Pick_Up_Location"]."</td>";
						    echo "<td>".$row["Pick_Up_Date"]."</td>";
							echo "<td>".$row["Pick_Up_Time"]."</td>";
							echo "<td>".$row["Drop_Location"]."</td>";
							echo "<td>".$row["Drop_Date"]."</td>";
							echo "<td>".$row["Drop_Time"]."</td>";
							echo "<td> <button type='submit'> <a href='UpdateBooking.php?id=$row[Booking_ID]'> Update </a> </button> </td>";
						    echo "<td> <button type='submit'> <a href='DeleteBooking.php?id=$row[Booking_ID]'> Delete </button> </td> </tr>";
						
						}
						
					}	
                    else
                    {
						echo "0 results";
					}

             echo "</table>" ;  

             $con -> close();			 
			  
			  ?>
			  
		</div>
		
		</center>
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