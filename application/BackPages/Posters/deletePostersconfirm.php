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
    <h1>Confirm Posters to delete</h1>
      <?php $delPosters_sql="SELECT * FROM posters WHERE ID=".$_GET['ID'];
			$delPosters_query=mysqli_query($dbconnect, $delPosters_sql);
			$delPosters_rs=mysqli_fetch_assoc($delPosters_query); 
			?>
			<p>
        <?php echo "Do you really wish to delete ".$delPosters_rs['name']."?"; ?></p>
			<p><a href="index.php?page=Posters/deletePosters&BuID=<?php echo $_GET['ID']; ?>">Yes, delete it!</a> | <a href="index.php?page=Posters/deletePostersselect">No, go back</a> | <a href="index.php?page=admin">Back to admin panel</a></p>
			</div>
</center>
