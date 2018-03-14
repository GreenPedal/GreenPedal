<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$_SESSION['editwhereweoffer']['name']=$_POST['name'];
?>
<center>
  <?php  include("header.php");?>

  <div class="text">
<h1>Is This Right</h1>
<p>
 <?php echo $_SESSION['editwhereweoffer']['name']; ?>
</p>
<p>
  <a href="index.php?page=where/editwhereupdate">Confirm</a> | <a href="index.php?page=where/editwhere">Oops, go back</a> | <a href="index.php?page=admin">Back to admin panel</a>
</p>
</div>
</center>