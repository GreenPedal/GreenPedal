<?php
	session_start();
	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$enter_sql="INSERT INTO Posters (name, website, pic) VALUES ('".mysqli_real_escape_string($dbconnect, $_SESSION['addPosters']['name'])."','".mysqli_real_escape_string($dbconnect, $_SESSION['addPosters']['website'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['addPosters']['pic'])."')";

	$enter_query=mysqli_query($dbconnect, $enter_sql);
	
	unset($_SESSION['addPosters']);
	
?>
<center>
  <?php  include("header.php");?>

  <div class="text">
    <p>New Poster has been entered</p>
<p><a href="index.php?page=admin">Back to admin</a> - <a href="index.php?page=Posters/addPosters">Add anther Posters</a></p>
</div>
</center>
