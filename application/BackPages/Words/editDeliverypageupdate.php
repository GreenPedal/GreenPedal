<?php
	include("application/DBConnect/dbconnect.php");
  
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	
	$Deliverypage_sql="UPDATE deliverypage
 SET words='".$_SESSION['Deliverypage']['words']."' WHERE ID=".$_SESSION['Deliverypage']['ID'];
	$Deliverypage_query=mysqli_query($dbconnect, $Deliverypage_sql);
	
	unset($_SESSION['Deliverypage']);
			header("Location:index.php?page=application/Profiles/Admin");

?>
