<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$delwhatweoffer_sql="DELETE FROM whatweoffer WHERE ID=".$_GET['ID'];
	$delwhatweoffer_query=mysqli_query($dbconnect, $delwhatweoffer_sql);
	
?>
<center>
  <div class="text">
    <h1>What We Offer deleted</h1>
	  <p><a href="index.php?page=admin">Return to admin panel</a></p>
</div>
</center>