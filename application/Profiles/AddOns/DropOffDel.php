<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$DelDropOff_sql="DELETE FROM dropoff WHERE ID=".$_GET['ID'];
	$DelDropOff_query=mysqli_query($dbconnect, $DelDropOff_sql);
					header("Location:index.php?page=application/Profiles/Admin");

	
?>
