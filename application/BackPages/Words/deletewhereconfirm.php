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
      <?php $delwhereweoffer_sql="SELECT * FROM whereweoffer WHERE ID=".$_GET['ID'];
			$delwhereweoffer_query=mysqli_query($dbconnect, $delwhereweoffer_sql);
			$delwhereweoffer_rs=mysqli_fetch_assoc($delwhereweoffer_query); 
						?>
			<p>
              <?php echo "Do you really wish to delete ".$delwhereweoffer_rs['name']."?"; ?></p>
			<p><a href="index.php?page=where/deletewhere&ID=<?php echo $_GET['ID']; ?>">Yes, delete it!</a> | <a href="index.php?page=where/deletewhereselect">No, go back</a> | <a href="index.php?page=admin">Back to admin panel</a></p>
</div>
</center>