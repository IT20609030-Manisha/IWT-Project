

<html>
<head>
	<title> Ride Zone </title>
	<link rel="stylesheet" href="CSS/style NEW.css">
    
</head>

<body style="background-color:#C2CAD0">

	<!--header-->
	<div id="head">
	<!--logo-->
	<img src="Images/Logo.png" alt="logo" id="log">
	
	
	<!--login image-->
	<img src = "Images/log.png" class="login" align="right">
	
	<!--login-->
	<br><br><p align="right" id="para"><a href="Login.php"> Login / Sign-Up </a></p>
	
	<br><br>
	
	
	
	<!--Navigation bar-->
	<ul class="menu">
		    <li class="menu"> <a href="Home NEW.html" >Home </a></li>
			<li class="menu"> <a href="pravailable.php" >Vehicles </a></li>
			<li class="menu"> <a href="Bookings.php" >Bookings </a></li>
			<li class="menu"> <a href="tourpackage.html" >Tour Packages </a></li>
	</ul>
	
	
	</div>
	
	<hr>
	<br>
	
	<form method = "post" action = "submit_details.php">
	
<div>
<p> <font size = "5" color = "darkred" <b> <u> Select a payment method </u> </b> </font> </p>	

<br>
<div>
<font color = "blue" font face = " Palatino" size = "4"> <input type = "radio" name = "1" value = "Credit Card" > Credit Card </font>
<br>
</div>
<div>
<pre>     <input type = "radio" name = "2" value = "Visa" > Visa <br> </pre>
<pre>     <input type = "radio" name = "2" value = "Master"> Master <br> </pre>
</div>
<pre>        CVV : <input type = "text" name = "3" value = "000">       Card number : <input type = "text" name = "4" value = "none">         Expiry date : <input type = "date" name = "5" value = "2021-10-30"> </pre>

</div>
<br>
<p> If you pay by cash click this button. </p> 
<button> <a href = "Home NEW.html"> Cash Payment </a></button>

<br>
<br>
    <pre>  <input type = "submit" value = "Confirm"> </pre> <br><br>

	</form>

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