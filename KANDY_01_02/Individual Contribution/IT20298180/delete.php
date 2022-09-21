<?php

include 'config.php';

$Record_ID = $_GET['id'];

$sql = "DELETE FROM payment WHERE Payment_ID ='$Record_ID'";

if($con -> query($sql))
{
echo "<script> alert('record delete successfully !!')</script>";
header("Location:Payment_Table.php");
}
else
{
echo "<script> alert('ERROR DELETING')</script>";
}



$con -> close();




?>