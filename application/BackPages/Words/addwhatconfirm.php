<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$_SESSION['addwhatweoffer']=$_POST['name'];
?>
<center>
  <?php  include("header.php");?>

  <div class="text">
    <h1>Is This Right</h1>
  <p>
    <?php echo $_SESSION['addwhatweoffer']; ?>
  </p>
  <p>
    <a href="index.php?page=what/addwhatinsert">Confirm</a> | <a href="index.php?page=what/addwhat&update=true">Go back</a> | <a href="index.php?page=admin">Back to admin panel</a>
  </p>
</div>
</center>