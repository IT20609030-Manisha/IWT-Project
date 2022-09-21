<?php
	session_start();
	
	//destroy session
	session_destroy();
	header("location:Login.php");
	exit();

?>