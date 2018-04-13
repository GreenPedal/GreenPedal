<?php
	include("application/DBConnect/dbconnect.php");
  
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	
	$editDeliverypage_sql="UPDATE deliverypage
 SET words='".$_SESSION['editDeliverypage']['words']."' WHERE ID=".$_SESSION['editDeliverypage']['ID'];
	$editDeliverypage_query=mysqli_query($dbconnect, $editDeliverypage_sql);
	
	unset($_SESSION['editDeliverypage']);
?>
<center>
<div class="text">
<p>The Delivery Page Info is updated..</p>
<p>
  <a href="index.php?page=admin">Back to admin panel</a>
</p>
</div>
  </center>