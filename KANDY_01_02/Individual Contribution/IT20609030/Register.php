<html>
<head>
	<title> Ride Zone </title>
	
	<!--add atyles sheet-->
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
	
	<br><br>
	
	<div id="RegSec">
		<!--Registration Form-->
		<form id="RegisterForm" action = "submitCustomerDetails.php" method = "post" onsubmit = "return checkPassword()">
			
			<label>First Name</label>
			<input class="regInput" type="text" name="txtfname" placeholder="Your Name" required ><br><br>
			
			<label>Last Name</label>
			<input class="regInput" type="text" name="txtlname" placeholder="Your Last Name" required ><br><br>
			
			<label>Gender</label>&emsp; &emsp; &emsp; &emsp;
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female<br><br>
			
			<label>Date of Birth</label>
			<input class="regInput" type="date" name="dob" style="width:165px;"><br><br> <!--reqiured??-->
			
			<label>Mobile Number</label>
			<input class="regInput" type="tel" name="txtmobile" pattern="[0-9]{10}" required><br><br> <!--placeholder-->
			
			<label>Email</label>
			<input class="regInput" type="email" name="email"  pattern="[a-z0-9._%+-]+@+[a-z0-9]+\.[a-z0-9]{2,3}" required><br><br> <!--add title-->
			
			<label>Password</label>
			<input class="regInput" type="password" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" title="Password should have 5-10 chracters & INCLUDE capital letters,simple letters & chracters" required><br><br>
			
			
			<label>Re-enter Password</label>
			<input class="regInput" type="password" name="password" id="cnfrmpwd" required><br><br>
			
			<input type="checkBox" id="checkselect" onclick="enableButton()"> By continuing, you agree to RideZone's  <a href="privacyPolicy.html">Privacy policy</a><br><br>
			
			<br>
			
			<input type="submit" id="submitbtn" value="SIGN UP" disabled><br><br>
			
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
	</div>
	</footer>
</body>
</html>