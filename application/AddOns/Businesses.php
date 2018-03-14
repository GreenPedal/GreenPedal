<?php
  Include("application/DBConnect/dbconnect.php");
  $Businesses_sql="SELECT * FROM businesses";
	$Businesses_query=mysqli_query($dbconnect, $Businesses_sql);
	$Businesses_rs=mysqli_fetch_assoc($Businesses_query);
?>


