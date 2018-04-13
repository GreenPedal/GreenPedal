<?php
	session_start();
	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$enter_sql="INSERT INTO businesses (name, Website, Pic) VALUES ('".mysqli_real_escape_string($dbconnect, $_SESSION['addBusinesses']['name'])."','".mysqli_real_escape_string($dbconnect, $_SESSION['addBusinesses']['website'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['addBusinesses']['Pic'])."')";

	$enter_query=mysqli_query($dbconnect, $enter_sql);
	
	unset($_SESSION['addBusinesses']);
	
?>
<center>
  <div class="text">
    <p>New Businesse has been entered</p>
<p><a href="index.php?page=admin">Back to admin</a> - <a href="index.php?page=Businesse/addBusinesse">Add anther Event</a></p>
</div>
</center>
