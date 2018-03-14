<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$_SESSION['editadvertising']['words']=$_POST['words'];
?>
<center>
  <?php  include("header.php");?>

  <div class="text">
    <h1>Is This Right</h1>
<p>
 <?php echo $_SESSION['editadvertising']['words']; ?>
</p>
<p>
  <a href="index.php?page=advertising/editadvertisingupdate">Confirm</a> | <a href="index.php?page=advertising/editadvertising">Oops, go back</a> | <a href="index.php?page=admin">Back to admin panel</a>
</p>
</div>
</center>
