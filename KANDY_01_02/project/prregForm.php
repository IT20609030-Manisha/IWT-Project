
<!-----Registration form------>

<html>
<head>
	<link rel="stylesheet" href="css/prVehicleStyles.css">
	<script src="js/prjavascript.js"></script>
</head>
<body>

	<div class="split top">
			
			<!--header-->
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
	
	<!--split side menu-->
	<div class="split left">
		<div class="sidebar">

				<h4 class="heading"><marquee> Vehicles section </marquee></h4>
		
				<hr>
		
				<a href="pravailable.php" class="side"> Available vehicles </a><br>
				<a href="prregForm.php" class="side"> Register a new vehicle </a><br>
				<a href="prUpdate.php" class="side"> Update vehicle Details </a><br>
				<a href="prDel.php" class="side"> Delete Vehicle Registration </a><br>
				
		</div>
	</div>
	
	<!--split middle-->
	<div class="split middle">
		<div id = "reg">
		
			<h3 class="heading"> Vehicle Registration form </h3>
			
			<!--Registration form-->
			<form method="post" action="prSubmitAddItems.php">

				<!--vehicle Details-->
			<fieldset> 
				<legend> Vehicle Details </legend>

					<label> Vehicle Number </label>&nbsp &nbsp
					<input type="text" name="Vnum" placeholder="CP-ASX9652" required>
					
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
					
					<label> Vehicle Type </label>&nbsp &nbsp &nbsp &nbsp &nbsp
					<select id="vehicle" name = "Vtype">
						<option value="Tuk-Tuk"> Tuk-Tuk </option> 
						<option value="Mini car"> Mini car </option>
						<option value="Car"> Car </option>
						<option value="Lux Car"> Lux Car </option>
						<option value="Van"> Van </option>
						<option value="Bus"> Bus </option>
					</select><br><br>
					
					<label> Manufactured year </label>
					<input type="year" name="Vyear" placeholder="2002" required><br><br>
							
					
					
					<label> Colour</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
					<input type="text" name="Vcolour" required>
					
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 					
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					
					
					
					<label> Brand</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					<input type="text" name="Vbrand" placeholder="TOYOTA_Axio" required><br><br>
							
					<label> Location </label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
					<input type="text" name="loc" required><br><br>
					
					<label> No. of Passengers </label>&nbsp
					<input type="number" name="Vpss" required>
					
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
					
					<label> No. of luggages </label>&nbsp &nbsp 
					<input type="number" name="Vlug" required><br><br>
					
					<label> AC status </label><br>
					<input type="radio" name="ACs" value="AC"> AC 
					<input type="radio" name="ACs" value="NON AC"> Non AC <br><br>
					
		
				</fieldset>
				<br><br>
	
	
				<!--Owner details-->
					
				<fieldset>
					<legend> Owner Details</legend>
						
					<label> Name in full </label>
					<input type="text" name="OFname" class="box" placeholder="Saman_Dissanayake" required><br><br>
						
					<label> Contact number </label>
					<input type="tel" name="tel" pattern="[0-9]{10}" required><br><br>
						
				</fieldset>
					
				<br><br>
						
				<a href="rules and regulations.pdf" target="blank"> Rules and Regulations </a><br><br>
				
				<input type="checkbox" id="checkbox" onclick="enableButton()"> I accept rules and regulations </a><br><br><br>
				<input type="submit" value="SUBMIT" id="submitbtn"  disabled><br><br>

			</form>
		</div>
	</div>

	 
	<hr>
	
			
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






