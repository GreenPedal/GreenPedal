<?php
	session_start();
	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	if(!isset($_SESSION['addPosters'])) {
		$_SESSION['addPosters']['name']="";
		$_SESSION['addPosters']['website']="";
		$_SESSION['addPosters']['pic']="noimage.jpg";
	} else {
		if($_SESSION['addPosters']['pic']!="noimage.jpg"){
			unlink("Posters/image/".$_SESSION['addPosters']['pic']);
		}
	}
?>
<center>
  <?php  include("header.php");?>

  <div class="text">
  <h1>Enter details for a Posters</h1>
  <form method="post" action="index.php?page=Posters/confirmaddPosters" enctype="multipart/form-data">
    <p> Name: <input type="text" name="name"/> </p>
    <p> WebSite: <input type="text" name="website"  /> </p>
    <p> Image: <input type="file" name="fileToUpload" id="fileToUpload" /> </p>
    <input type="submit" name="submit" value="Submit" />
  </form>
</div>
</center>


