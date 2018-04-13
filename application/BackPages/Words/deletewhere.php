<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$delwhereweoffer_sql="DELETE FROM whereweoffer WHERE ID=".$_GET['ID'];
	$delwhereweoffer_query=mysqli_query($dbconnect, $delwhereweoffer_sql);
	
?>
<center>
  <div class="text">
    <h1>Where We Offer deleted</h1>
	  <p><a href="index.php?page=admin">Return to admin panel</a></p>
</div>
</center>