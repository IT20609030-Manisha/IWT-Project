<?php 
	session_start();
	require 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title> Ride Zone </title>
	
	
	<link rel="stylesheet" href="css/styles3.css">
	<link rel="stylesheet" href="css/profileStyles.css">
	
	
	
</head>

<body>
	<!--header-->
	<div id="head">
	<!--logo-->
	<img src="images/logo2.png.png" alt="logo" id="logo">
	
	
	<!--login image-->
	<img src = "images/login.jpeg" class="login" align="right">
	
	
	<!--login-->
	
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
	
	<div id="block">
	
		<div id="leftBlock"> 
			<div id="profileleft">
			<!--Add profile logo -->
			<img id="profileuser" src = "images/profile.png" align="center"><br><br>
			
			<!--Display user name-->
			<?php
				echo "<h2>".$_SESSION['logged_user']."</h2>";
				echo "<br><br>" ;
			?>
			
			
			
			<!-- Log Out-->
			<a href="logOut.php" color="black">Log Out</a><br><br>
			<a href="mytrips.html">My Trips</a><br><br>
			<!--Delete Account-->
			<?php 
				
				$sql = "SELECT customer_ID
						From customer where firstName='$_SESSION[logged_user]' and password='$_SESSION[pwd]'";
						
						
				
				//execute the query
				$result =$con->query($sql);	

				//check having number of rows
				if($result -> num_rows > 0 )
				{
					while($row = $result -> fetch_assoc())
					{
						 
						$id = $row["customer_ID"]; //read customer id
							
						//echo " Customer ID: ". $row["customer_ID"]. "<br><br>";
							
					}
				}
				else
				{
					echo "0 Results"; 
				}
				
					
				
				echo "<button id='deletebtn' type='submit'><a href='deleteCustomer.php?id=$id'> Delete Account </a></button>";
				
			?>
			
			
			</div>	
			
		</div>
		
		<div id="rightBlock">
			<div id="details">
				<?php
				
					//read the data from database
				
					$sql = "SELECT customer_ID, firstName, lastName, gender, dateOfBirth,mobileNO, email, password
							From customer where firstName='$_SESSION[logged_user]' and password='$_SESSION[pwd]'";
				
					//execute the query
					$result =$con->query($sql);	

					//check having number of rows
					if($result -> num_rows > 0 )
					{
						while($row = $result -> fetch_assoc())
						{
						 
							$id = $row["customer_ID"]; //read customer id
							
							echo " Customer ID: ". $row["customer_ID"]. "<br><br>";
							echo " First Name: ". $row["firstName"]. "<br><br>";
							echo " Last Name: ". $row["lastName"]. "<br><br>";
							echo " Gender: ". $row["gender"]. "<br><br>";
							echo " Date Of Birth: ". $row["dateOfBirth"]. "<br><br>";
							echo " Email: ". $row["email"]. "<br><br>";
							echo " Password: ". $row["password"]. "<br>";
							
							echo "<button id='editbtn' type='submit'><a href='EditProfile.php?id=$id'> Edit </a></button>";
							
						}
					}
					else
					{
						echo "0 Results"; 
					}
				
				
				//close the connection 
				$con -> close();		
				
				
				
				?>
			</div>
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