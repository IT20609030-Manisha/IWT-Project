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
	<br><br><p align="right" id="para"><a href="#login page"> Login / Sign-Up </a></p>
	
	<br><br>
	
	
	
	<!--Navigation bar-->
	<ul class="menu">
		<li class="menu"> <a href="#home" >Home </a></li>
		<li class="menu"> <a href="#Vehicles" >Vehicles </a></li>
		<li class="menu"> <a href="#Bookings" >Bookings </a></li>
		<li class="menu"> <a href="#Tour" >Tour Packages </a></li>
	</ul>
	
	
	</div>
	
	<hr>
	<br>




<h3> Edit Payment Table </h3>

	
<?php

$Record_ID=$_GET['id'];

$sql = "SELECT * FROM payment WHERE Payment_ID = $Record_ID";

$result = $con -> query($sql);

if($result -> num_rows > 0)
{
while($row = $result -> fetch_assoc())
{
$Method=$row["Method"];
	$Card_Number=$row["Card_Number"];
	$CVV=$row["CVV"];
	$Expiry_Date=$row["Expiry_Date"];
	$Payment_ID=$row["Payment_ID"];
}
}
else
{
echo "0 results";
}

echo "</table>";

$con -> close();

?>

<form method = "post" action = "submit_update_details.php">
	
<div>
<p> <font size = "5" color = "darkred" <b> <u> Select a payment method </u> </b> </font> </p>	

<br>
<div>
<font color = "blue" font face = " Palatino" size = "4"> <input type = "radio" name = "1" value = "Credit Card" value=<?php echo $Method ?>> Credit Card </font>
<br>
</div>
<div>
<pre>     <input type = "radio" name = "2" value = "Visa" > Visa <br> </pre>
<pre>     <input type = "radio" name = "2" value = "Master"> Master <br> </pre>
</div>
<pre>        CVV : <input type = "text" name = "3" value=<?php echo $CVV ?>>       Card number : <input type = "text" name = "4" value=<?php echo $Card_Number ?>>         Expiry date : <input type = "date" name = "5" value=<?php echo $Expiry_Date ?>> </pre>

</div>
<br>
<font color = "blue" font face = " Palatino" size = "4"> <input type = "radio" name = "1" value = "Cash" value=<?php echo $Method ?> > Cash	</font> <br> <br>
<br>
<input type="hidden" name="Payment_ID" value=<?php echo $Payment_ID ?>>

    <pre>  <input type = "submit" value = "Confirm">     <input type = "reset" value = "Change payment method"> </pre> <br><br>

	</form>


<hr>

<!--footer-->
	
	<footer>
	<div>
		
		<!--facebook logo-->
		<a href = "#facebook"> <img src="images/fb.jpeg" alt="fb" id="fb"> </a>
		
		<!--instagram logo-->
		<a href = "#instr"> <img src="images/inst.jpeg" alt="instr" id="inst"> </a>
		
		<!--twitter logo-->
		<a href = "#twitter"> <img src="images/twitter.png" alt="twitter" id="twit"> </a>
		
		<div class="link">
		
		<!-- about us-->
		<a href="#about us" class="link">About Us </a>
		
		<!--  contactus-->
		<a href="#contact us" class="link"> Contact Us </a>
		
		<!-- privacy policy-->
		<a href="#privacy policy" class="link"> Privacy Policy </a>
		</div>
		
		
		<!--google play store logo-->
		<a href = "#play store"><img src="images/gplaynew.jpg" alt="play store" id="google" align="right"></a>
		
		<!--apple app logo-->
		<a href = "#apple store"><img src="images/applenew.jpeg" alt="apple app store" id="apple" align="right"></a>
		
		
	</div>
	</footer>
</body>
</html>