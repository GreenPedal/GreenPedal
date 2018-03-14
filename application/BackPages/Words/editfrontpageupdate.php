<?php
	include("dbconnect.php");
  
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	
	$editfrontpage_sql="UPDATE frontpage SET words='".$_SESSION['editfrontpage']['words']."' WHERE words_ID=".$_SESSION['editfrontpage']['words_ID'];
	$editfrontpage_query=mysqli_query($dbconnect, $editfrontpage_sql);
	
	unset($_SESSION['editfrontpage']);
?>
<center>
  <?php  include("header.php");?>

<div class="text">
<p>The frontpage Info is updated..</p>
<p>
  <a href="index.php?page=admin">Back to admin panel</a>
</p>
</div>
  </center>