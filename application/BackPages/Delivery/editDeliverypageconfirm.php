<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$_SESSION['editDeliverypage']['words']=$_POST['words'];
?>
<center>
  <?php  include("header.php");?>
<div class="text">
  <h1>Is This Right</h1>
  <p>
    <?php echo $_SESSION['editDeliverypage']['words']; ?>
  </p>
  <p>
  <a href="index.php?page=Deliverypage/editDeliverypageupdate">Confirm</a> | <a href="index.php?page=Deliverypage/editDeliverypage">Oops, go back</a> | <a href="index.php?page=admin">Back to admin panel</a>
</p>
</div>
  </center>
