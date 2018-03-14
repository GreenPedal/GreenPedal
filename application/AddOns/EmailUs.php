<?php
 include("application/Email/Mail.php");
	session_start();
	if(!isset($_SESSION['Email'])) {
      		$_SESSION['Email']['email']="";
		$_SESSION['Email']['name']="";
    	$_SESSION['Email']['Subject']="";
		$_SESSION['Email']['body']="";
     }
?>