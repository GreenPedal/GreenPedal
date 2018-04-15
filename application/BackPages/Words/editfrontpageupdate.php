<?php
	include("application/DBConnect/dbconnect.php");
  
	session_start();
	
	
	$frontpage_sql="UPDATE frontpage SET words='".$_SESSION['frontpage']['words']."' WHERE words_ID=".$_SESSION['frontpage']['words_ID'];
	$frontpage_query=mysqli_query($dbconnect, $frontpage_sql);
	
	unset($_SESSION['frontpage']);

		header("Location:index.php?page=application/Profiles/Admin");
?>
