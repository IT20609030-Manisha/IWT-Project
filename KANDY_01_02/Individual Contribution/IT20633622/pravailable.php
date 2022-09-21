
<!-----------Available Vehicles------->

<?php
    
	require "config.php"
		
?>

<html>
<head>
	<link rel="stylesheet" href="css/prVehicleStyles.css">
	<script src="js/prjavascript.js"></script>

</head>

<body>

		<div class="split top">	
		<div id="head">
			<!--logo-->
			<img src="images/logo.png" alt="logo" id="log1">
			
			
			<!--login image-->
			<img src = "images/log.png" class="login" align="right">
			
			<!--login-->
			<br><br><p align="right" id="para"><a href="Login.php"> Login / Sign-Up </a></p>
			
			
			
			</div>

			
			<!--Navigation bar-->
			<ul class="menu">
				<li class="menu"> <a href="Home NEW.html" >Home </a></li>
				<li class="menu"> <a href="pravailable.php" >Vehicles </a></li>
				<li class="menu"> <a href="Bookings.php" >Bookings </a></li>
				<li class="menu"> <a href="tourpackage.php" >Tour Packages </a></li>
			</ul>
				
		</div>
	</div>		
	
	<!--side menu-->
	
	<div class="split left">
		<div class="sidebar">
		
				<h3 class="heading"><marquee> Vehicles section </marquee></h3>
		
				<hr>
		
				<a href="pravailable.php" class="side"> Available vehicles </a><br>
				<a href="prregForm.php" class="side"> Register a new vehicle </a><br>
				<a href="prUpdate.php" class="side"> Update vehicle Details </a><br>
				<a href="prDel.php" class="side"> Delete Vehicle Registration </a><br>
			
		</div>
	</div>
	
	<!--split middle-->
	<div class="split middle">
		<div class="cont">
			<h3 class="heading"> Available vehicles </h3>
		
			<table border = '1' id="table">
				<tr>
					<th>Vehicle_Id</th>
					<th>Vehicle_Number</th>
					<th>Vehicle_Type</th>
					<th>Colour</th>
					<th>Brand</th>
					<th>Location</th>
					<th>No_Of_Passengers</th>
					<th>No_Of_Luggages</th>
					<th>AC_status</th>
					<th>Owner_Name</th>
					<th>Owner_Contact</th>
								
				</tr>
			
		
			<?php
		
			
				$sql = "SELECT Vehicle_Id, Vehicle_Number, Vehicle_Type, Colour, Brand, Location, No_Of_Passengers, No_Of_Luggages, AC_status, Owner_Name, Owner_Contact FROM vehicles";
			
				$result = $con -> query($sql);
				
				if($result -> num_rows > 0)
				{
					while($row = $result -> fetch_assoc())
					{
						$id = $row["Vehicle_Id"];
						echo "<tr><td>".$row["Vehicle_Id"]."</td>";
						echo "<td>".$row["Vehicle_Number"]."</td>";
						echo "<td>".$row["Vehicle_Type"]."</td>";
						echo "<td>".$row["Colour"]."</td>";
						echo "<td>".$row["Brand"]."</td>";
						echo "<td>".$row["Location"]."</td>";
						echo "<td>".$row["No_Of_Passengers"]. "</td>";
						echo "<td>".$row["No_Of_Luggages"]. "</td>";
						echo "<td>".$row["AC_status"]."</td>";
						echo "<td>".$row["Owner_Name"]."</td>";
						echo "<td>".$row["Owner_Contact"]."</td>";
						
					}
				}
				else
				{
					echo "0 results";
				}
				
				echo "</table>";
			
				$con -> close();
			
			?>
	
		</table>	
	</div>
			
	<!--split bottom-->
	<div class="split bottom">
		<div class = "footer">
		
			<footer>
				
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
				<a href="Reveiw.html" class="link"> Contact Us </a>
				
				<!-- privacy policy-->
				<a href="privacyPolicy.html" class="link"> Privacy Policy </a></div>
			</footer>
		</div>
	</div>
	
</body>
</html>