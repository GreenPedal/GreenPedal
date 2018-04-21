<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$DelPickUp_sql="DELETE FROM pickup WHERE ID=".$_GET['ID'];
	$DelPcikUp_query=mysqli_query($dbconnect, $DelPickUp_sql);
					header("Location:index.php?page=application/Profiles/Admin");

	
?>
