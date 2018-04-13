<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	
	$whereweoffer_sql="UPDATE whereweoffer SET name='".$_SESSION['editwhereweoffer']['name']."' WHERE ID=".$_SESSION['editwhereweoffer']['ID'];
	$whereweoffer_query=mysqli_query($dbconnect, $whereweoffer_sql);
	
	unset($_SESSION['editwhereweoffer']);
?>
<center>

  <div class="text">
<p>The Where We Offer are updated..</p>
<p>
  <a href="index.php?page=admin">Back to admin panel</a>
</p>
</div>
</center>