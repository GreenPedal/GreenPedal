<?php
	include("dbconnect.php");
  
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	
	$editEventPage_sql="UPDATE  eventpage
 SET words='".$_SESSION['editEventPage']['words']."' WHERE ID=".$_SESSION['editEventPage']['ID'];
	$editEventPage_query=mysqli_query($dbconnect, $editEventPage_sql);
	
	unset($_SESSION['editEventPage']);
?>
<center>
  <?php  include("header.php");?>

<div class="text">
<p>The Event Page Info is updated..</p>
<p>
  <a href="index.php?page=admin">Back to admin panel</a>
</p>
</div>
  </center>