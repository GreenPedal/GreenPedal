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
    <h1>Confirm Businesses to delete</h1>
      <?php $delBusinesses_sql="SELECT * FROM businesses WHERE Bus_ID=".$_GET['Bus_ID'];
			$delBusinesses_query=mysqli_query($dbconnect, $delBusinesses_sql);
			$delBusinesses_rs=mysqli_fetch_assoc($delBusinesses_query); 
			?>
			<p>
        <?php echo "Do you really wish to delete ".$delBusinesses_rs['name']."?"; ?></p>
			<p><a href="index.php?page=Businesses/deleteBusinesses&Bus_ID=<?php echo $_GET['Bus_ID']; ?>">Yes, delete it!</a> | <a href="index.php?page=Businesses/deleteBusinessesselect">No, go back</a> | <a href="index.php?page=admin">Back to admin panel</a></p>
			</div>
</center>
