<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$_SESSION['editEventPage']['words']=$_POST['words'];
?>
<center>
  <?php  include("header.php");?>
<div class="text">
  <h1>Is This Right</h1>
  <p>
    <?php echo $_SESSION['editEventPage']['words']; ?>
  </p>
  <p>
  <a href="index.php?page=EventPage/editEventPageupdate">Confirm</a> | <a href="index.php?page=EventPage/editEventPage">Oops, go back</a> | <a href="index.php?page=admin">Back to admin panel</a>
</p>
</div>
  </center>
