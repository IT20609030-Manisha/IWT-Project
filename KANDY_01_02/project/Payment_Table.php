<?php
	require 'config.php';
?>

<html>
<head>
	<title> Ride Zone </title>
	<link rel="stylesheet" href="CSS/style NEW.css">
    
</head>




<body style="background-color:#C2CAD0;">



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




<h3> Payment Table </h3>

<table border = "1">
	<tr> 
		<th> Payment_ID </th>
		<th> Method </th>
		<th> Card_Number </th>
		<th> CVV </th>
		<th> Expiry_Date </th> 
	</tr>
	
<?php


$sql = "SELECT Payment_ID, Method, Card_Number, CVV, Expiry_Date FROM payment";

$result = $con -> query($sql);

if($result -> num_rows > 0)
{
while($row = $result -> fetch_assoc())
{
$id = $row["Payment_ID"];
echo "<tr><td>".$row["Payment_ID"]."</td>";
echo "<td>".$row["Method"]."</td>";
echo "<td>".$row["Card_Number"]."</td>";
echo "<td>".$row["CVV"]."</td>";
echo "<td>".$row["Expiry_Date"]."</td>";
echo "<td> <button type='submit'> <a href='Edit_Details.php?id=$id'> Edit </a></button> </td>";
echo "<td> <button type='submit'> <a href='delete.php?id=$id'> Delete </a> </button> </td> ";
echo "<td> <button type='submit'> <a href='final.html'> Confirmation Message </a> </button> </td> </tr>";

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
	</footer>
</body>
</html>