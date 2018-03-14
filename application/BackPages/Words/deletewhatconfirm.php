<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
?>
<center>
  <?php  include("header.php");?>

  <div class="text">
    <h1>Are You Sure</h1>
      <?php $delwhatweoffer_sql="SELECT * FROM whatweoffer WHERE ID=".$_GET['ID'];
			$delwhatweoffer_query=mysqli_query($dbconnect, $delwhatweoffer_sql);
			$delwhatweoffer_rs=mysqli_fetch_assoc($delwhatweoffer_query); 
						?>
			<p>
              <?php echo "Do you really wish to delete ".$delwhatweoffer_rs['name']."?"; ?></p>
			<p><a href="index.php?page=what/deletewhat&ID=<?php echo $_GET['ID']; ?>">Yes, delete it!</a> | <a href="index.php?page=what/deletewhatselect">No, go back</a> | <a href="index.php?page=admin">Back to admin panel</a></p>
</div>
</center>