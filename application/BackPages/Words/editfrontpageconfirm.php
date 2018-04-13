<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$_SESSION['editfrontpage']['words']=$_POST['words'];
?>
<center>
<div class="text">
  <h1>Is This Right</h1>
  <p>
    <?php echo $_SESSION['editfrontpage']['words']; ?>
  </p>
  <p>
  <a href="index.php?page=frontpage/editfrontpageupdate">Confirm</a> | <a href="index.php?page=frontpage/editfrontpage">Oops, go back</a> | <a href="index.php?page=admin">Back to admin panel</a>
</p>
</div>
  </center>
