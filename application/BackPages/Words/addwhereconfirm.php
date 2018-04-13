<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$_SESSION['addwhereweoffer']=$_POST['name'];
?>
<center>

  <div class="text">
    <h1>Is This Right</h1>
  <p>
    <?php echo $_SESSION['addwhereweoffer']; ?>
  </p>
  <p>
    <a href="index.php?page=where/addwhereinsert">Confirm</a> | <a href="index.php?page=where/addwhere&update=true">Go back</a> | <a href="index.php?page=admin">Back to admin panel</a>
  </p>
</div>
</center>