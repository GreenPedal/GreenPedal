<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$newwhereweoffer_sql="INSERT INTO whereweoffer (name) VALUES ('".$_SESSION['addwhereweoffer']."')";
	$newwhereweoffer_query=mysqli_query($dbconnect, $newwhereweoffer_sql);
	unset($_SESSION['addwhereweoffer']);
?>
<center>
  <div class="text">
    <p>You Enter a new Where We Offer</p>
	  <p><a href="index.php?page=admin">Back to admin panel</a></p>
</div>
</center>