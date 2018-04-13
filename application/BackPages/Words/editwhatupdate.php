<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	
	$whatweoffer_sql="UPDATE whatweoffer SET name='".$_SESSION['editwhatweoffer']['name']."' WHERE ID=".$_SESSION['editwhatweoffer']['ID'];
	$whatweoffer_query=mysqli_query($dbconnect, $whatweoffer_sql);
	
	unset($_SESSION['editwhatweoffer']);
?>
<center>

  <div class="text">
    <p>The What We Offer are updated..</p>
<p>
  <a href="index.php?page=admin">Back to admin panel</a>
</p>
</div>
</center>