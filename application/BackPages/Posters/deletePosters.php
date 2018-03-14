<?php

	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$delPosters_sql="DELETE FROM posters WHERE ID=".$_GET['ID'];
	$delPosters_query=mysqli_query($dbconnect, $delPosters_sql);
	
?>
<center>
  <?php  include("header.php");?>

  <div class="text">
      <p>Posters has successfully been deleted</p>
	  <p><a href="index.php?page=admin">Return to admin panel</a></p>
	  </div>
</center>
