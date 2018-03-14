<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
?>
<center>
  <?php  include("header.php");?>

  <div class="text">
    <h1>Delete Event</h1>
      <?php $delBusinesses_sql="SELECT * FROM businesses";
			$delBusinesses_query=mysqli_query($dbconnect, $delBusinesses_sql);
			$delBusinesses_rs=mysqli_fetch_assoc($delBusinesses_query);
			do { ?>
			<p><a href="index.php?page=Businesses/deleteBusinessesconfirm&Bus_ID=<?php echo $delBusinesses_rs['Bus_ID']; ?>"><?php echo $delBusinesses_rs['name']; ?></a></p>

			<?php
			} while ($delBusinesses_rs=mysqli_fetch_assoc($delBusinesses_query));
			?></div>
</center>
