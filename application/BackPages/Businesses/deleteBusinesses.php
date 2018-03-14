<?php

	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$delBusinesses_sql="DELETE FROM businesses WHERE Bus_ID=".$_GET['Bus_ID'];
	$delBusinesses_query=mysqli_query($dbconnect, $delBusinesses_sql);
	
?>
<center>
  <?php  include("header.php");?>

  <div class="text">
    <h1>Businesses deleted</h1>
      <p>Businesses has successfully been deleted</p>
	  <p><a href="index.php?page=admin">Return to admin panel</a></p>
	  </div>
</center>
