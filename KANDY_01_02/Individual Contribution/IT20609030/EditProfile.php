<?php
   require 'config.php';
?>


<html>
<head>
	<title> Ride Zone </title>
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
	
	<?php 
		
		//fetch the info from the database
		
		$recordId = $_GET['id'] ; //get the id from url & store it in variable

		$sql = "SELECT * FROM customer Where customer_ID = $recordId";
			
		$result = $con -> query($sql);
			
		//check whether have results or not
		if($result -> num_rows > 0) //read values
		{
			while($row = $result -> fetch_assoc())
			{
				$FName = $row["firstName"];
				$Lname = $row["lastName"];
				$Gender = $row["gender"];
				$DOB = $row["dateOfBirth"];
				$Mobile = $row["mobileNo"];
				$Email = $row["email"];
				$Pwd = $row["password"];
				$CusId = $row["customer_ID"];
			}
		}
		else
		{
			echo "0 Records" ;
		}
		
	?>
	
	<div id="editdiv">
		<form id="editForm" action = "submitEditProDetails.php" method = "post" onsubmit = "return checkPassword()">
			
			<label>First Name</label>
			<input class="editInput" type="text" name="txtfname" value=<?php echo $FName ?> readonly><br><br>
			
			<label>Last Name</label>
			<input class="editInput" type="text" name="txtlname" value=<?php echo $Lname ?> required><br><br>
			
			<label>Gender</label>
			<input class="editInput" type="text" name="gender" value=<?php echo $Gender ?> readonly><br><br>
			
			<label>Date of Birth</label>
			<input class="editInput" type="date" name="dob" style="width:165px;" value=<?php echo $DOB ?> readonly ><br><br> <!--reqiured??-->
			
			<label>Mobile Number</label>
			<input class="editInput" type="tel" name="txtmobile" pattern="[0-9]{10}" value=<?php echo $Mobile ?> required><br><br> <!--placeholder-->
			
			<label>Email</label>
			<input class="editInput" type="email" name="email"  pattern="[a-z0-9._%+-]+@+[a-z0-9]+\.[a-z0-9]{2,3}" value=<?php echo $Email ?> required><br><br> <!--add title-->
			
			<label>Password</label>
			<input class="editInput" type="password" id="pwd2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" title=""  value=<?php echo $Pwd ?> required> <br>
			&emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
			<input type="checkbox" onclick="showpwd()">Show Password <br><br>
			
			<!-- Script file to show password-->
			
				
			
			
			
			<label>Re-enter Password</label>
			<input class="editInput" type="password" name="password" id="cnfrmpwd" value=<?php echo $Pwd ?> required><br><br>
			
			
			<!--add hidden field-->
			<input type="hidden" name="cid" value=<?php echo $CusId ?>>
			
			<br><br>
			
			<input type="submit" id="submiteditbtn" value="UPDATE"><br><br>
			
		</form>
	
	
	
	<div>
	
	
	
	
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