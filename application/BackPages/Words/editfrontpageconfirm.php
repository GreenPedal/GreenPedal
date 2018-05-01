<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$_SESSION['frontpage']['words']=$_POST['words'];
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
  <link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />
      <?php
      include 'css/css.html'; 
    ?>
</head>
<center>
<div class="form">
  <h1>Is This Right</h1>
  <p>
    <?php echo $_SESSION['frontpage']['words']; ?>
  </p>
  <p>
  <a href="index.php?page=application/BackPages/Words/editfrontpageupdate"><button type="submit" style="margin-top:8px;" class="button button-block" name="update" value="Update">Update</button></a> 
  <button onclick="history.go(-1);" type="submit" style="margin-top:8px;" class="button button-block" name="GoBack" value="GoBack">GoBack</button>
  <a href="index.php?page=application/Profiles/Admin"><button type="submit" style="margin-top:8px;" class="button button-block" name="ToProfile" value="ToProfile">Go To Profile</button></a>
</p>
</div>
  </center>
