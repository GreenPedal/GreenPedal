<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	if(!isset($_GET['update'])) {
		$_SESSION['addwhereweoffer']="";
	}
?>


  <center>

    <div class="text">
      <h1>Add a new Where We Offer</h1>
      <form action="index.php?page=where/addwhereconfirm" method="post">
		<p><input name="name" value="<?php echo $_SESSION['addwhereweoffer']; ?>" /></p>
		<p><input type="submit" /></p>
	  </form>
</div>
</center>
  