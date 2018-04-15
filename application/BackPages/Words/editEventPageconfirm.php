<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$_SESSION['editEventPage']['words']=$_POST['words'];
?>
<head>
  <link href="application/BackPages/css/style.css" rel="stylesheet" type="text/css" />
</head>

<center>
<div class="text">
  <h1>Is This Right</h1>
  <p>
    <?php echo $_SESSION['editEventPage']['words']; ?>
  </p>
</div>
  <p>
  <a href="index.php?page=application/BackPages/Words/editEventPageupdate"><input type="submit" style="margin-top:10px" name="update" value="Update" /></a> 
  <a href="index.php?page=application/BackPages/Words/editEventPage"><input type="submit" style="margin-top:10px" name="GoBack" value="GoBack" /></a> 
  <a href="index.php?page=application/Profiles/Admin"><input type="submit" style="margin-top:10px" name="ToProfile" value="ToProfile" /></a>
</p>

  </center>
