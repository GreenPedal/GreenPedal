<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	
	$advertising_sql="UPDATE advertising SET words='".$_SESSION['editadvertising']['words']."' WHERE ID=".$_SESSION['editadvertising']['ID'];
	$advertising_query=mysqli_query($dbconnect, $advertising_sql);
	
	unset($_SESSION['editadvertising']);
?>
<center>

  <div class="text">
    <p>The Words are updated..</p>
<p>
  <a href="index.php?page=admin">Back to admin panel</a>
</p>
</div>
</center>
