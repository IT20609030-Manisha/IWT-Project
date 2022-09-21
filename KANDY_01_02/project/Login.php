<?php
   session_start();
   require 'config.php';
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  $username = $_POST["userName"];
	  $lpassword = $_POST["logPassword"]; 
	  
	  $sql = "SELECT * FROM customer Where firstName='$username' and password='$lpassword'";
	  
	  $result = $con -> query($sql);
	  
	  //check whether have results or not
		if($result -> num_rows > 0) //read values
		{
			$_SESSION['logged_user'] = $username;
			$_SESSION['pwd'] = $lpassword;
         
			header("location: Home NEW.html");
		}
		else if($username=="Admin" && $lpassword=="1234")
		{
			$_SESSION['logged_user'] = $username;
			$_SESSION['pwd'] = $lpassword;
			header("location: welcome.php"); //change the page---- main page
		}	
		else
		{
			echo "0 Records" ;
			echo "<script> alert('You have entered a wrong username or password!!!!')</script>";
		}
			
   }
?>

	


<html>
<head>
	<title> Ride Zone </title>
	<!--add atyles sheet
	<link rel="stylesheet" href="css/styles.css">-->
	
	<link rel="stylesheet" href="css/styles3.css">
	<link rel="stylesheet" href="css/loginStyles.css">
	
	
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
	
	<div id="block2">
		<div id="leftblock2">
		
		<form id="LoginForm" method="post" action="">
		
			<label style="text-align:center;"><h2 >Log in</h2></label><br>
			
			<label>Username </label>&ensp;
			<input type="text" id="userName" name="userName" placeholder="Your First Name" title="Enter your First Name as Username" required><br><br>
			
			<label>Password</label> &ensp;
			<input type="password" id="logPassword" name="logPassword" placeholder="Password" required><br><br>
			
			<a href="forgotPassword.php"> Forgot Password?</a>&emsp; Or &nbsp;<a href="Register.php"> Sign Up </a>
			
			<br><br>
			
			<input type="submit" id="loginbtn" value="Log in"><br><br>
			
		</form>
		</div>
		<div id="rightblock2">
			
		</div>
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