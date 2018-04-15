<?php
	include("application/DBConnect/dbconnect.php");
  
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	
	$editEventPage_sql="UPDATE  eventpage
 SET words='".$_SESSION['editEventPage']['words']."' WHERE ID=".$_SESSION['editEventPage']['ID'];
	$editEventPage_query=mysqli_query($dbconnect, $editEventPage_sql);
	
	unset($_SESSION['editEventPage']);
			header("Location:index.php?page=application/Profiles/Admin");

?>
