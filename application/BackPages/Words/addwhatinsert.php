<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$newwhatweoffer_sql="INSERT INTO whatweoffer (name) VALUES ('".$_SESSION['addwhatweoffer']."')";
	$newwhatweoffer_query=mysqli_query($dbconnect, $newwhatweoffer_sql);
	unset($_SESSION['addwhatweoffer']);
?>
<center>

  <div class="text">
    <p>You Enter a new What We Offer</p>
	  <p><a href="index.php?page=admin">Back to admin panel</a></p>
</div>
</center>