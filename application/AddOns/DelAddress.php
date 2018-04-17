<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$deladdress_sql="DELETE FROM address WHERE ID=".$_GET['ID'];
	$deladdress_query=mysqli_query($dbconnect, $deladdress_sql);
					header("Location:index.php?page=application/Profiles/Admin");

	
?>
