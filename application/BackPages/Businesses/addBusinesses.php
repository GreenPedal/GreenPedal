<?php
	session_start();
	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	if(!isset($_SESSION['addBusinesses'])) {
		$_SESSION['addBusinesses']['name']="";
		$_SESSION['addBusinesses']['website']="";
		$_SESSION['addBusinesses']['Pic']="noimage.jpg";
	} else {
		if($_SESSION['addBusinesses']['Pic']!="noimage.jpg"){
			unlink("images/".$_SESSION['addBusinesses']['Pic']);
		}
	}
?>
<center>
  <?php  include("header.php");?>

  <div class="text">
  <h1>Enter details for new user</h1>
  <form method="post" action="index.php?page=Businesses/confirmaddBusinesses" enctype="multipart/form-data">
    <p> Name: <input type="text" name="name"/> </p>
    <p> WebSite: <input type="text" name="website"  /> </p>
    <p> Image: <input type="file" name="fileToUpload" id="fileToUpload" /> </p>
    <input type="submit" name="submit" value="Submit" />
  </form>
</div>
</center>


