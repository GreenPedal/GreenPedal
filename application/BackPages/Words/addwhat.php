<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	if(!isset($_GET['update'])) {
		$_SESSION['addwhatweoffer']="";
	}
?>

  <center>
    <div class="text">
      <h1>Add new What We Offer</h1>
      <form action="index.php?page=what/addwhatconfirm" method="post">
		<p><input name="name" value="<?php echo $_SESSION['addwhatweoffer']; ?>" /></p>
		<p><input type="submit" /></p>
	  </form>
</div>
</center>
  