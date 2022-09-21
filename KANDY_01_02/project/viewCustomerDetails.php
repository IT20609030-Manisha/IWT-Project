<?php
	require 'config.php';
?>

<html>
<head>
	<title> Ride Zone </title>
	
	<!--Add style sheets-->
	<link rel="stylesheet" href="css/styles3.css">
	<link rel="stylesheet" href="css/profileStyles.css">
	
	<!--add javascript file-->
		<script type="text/javascript" src="js/myscript2.js">
		</script>
		
		
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
	
	<br>
	<div id="viewcus">
	<!-- add a table -->
		<!--define table to display retrieved data from database-->
		<table border="1">
		
			<tr>
				<th>Customer ID</th>
				<th> First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Date of Birth</th>
				<th>Mobile Number</th>
				<th> Email </th>
				
			</tr>
			
			<?php
				
				//read the data from database
				
				$sql = "SELECT customer_ID, firstName, lastName, gender, dateOfBirth, mobileNo, email
						From customer";
				
				//execute the query
				$result =$con->query($sql);	

				//check having number of rows
				if($result -> num_rows > 0 )
				{
					while($row = $result -> fetch_assoc())
					{
						 
						//$id = $row["item_id"]; //read item id
						
						echo "<tr><td>".$row["customer_ID"]."</td><td>".$row["firstName"].
							"</td><td>".$row["lastName"]."</td><td>".$row["gender"].
							"</td><td>".$row["dateOfBirth"]."</td><td>".$row["mobileNo"]."</td><td>".$row["email"]."</td></tr>";
						
			
							
					}
				}
				else
				{
					echo "0 Results"; 
				}
				
				//close the table
				echo "</table>";
				
				//close the connection 
				$con -> close();
			
			?>
	
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