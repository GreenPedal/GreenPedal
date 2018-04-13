<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
?>
<center>
  <div class="text">
	<h1>Delete Where We Offer</h1>
      <?php $delwhereweoffer_sql="SELECT * FROM whereweoffer";
			$delwhereweoffer_query=mysqli_query($dbconnect, $delwhereweoffer_sql);
			$delwhereweoffer_rs=mysqli_fetch_assoc($delwhereweoffer_query);
			do { ?>
			<p><a href="index.php?page=where/deletewhereconfirm&ID=
        
        
          <?php echo $delwhereweoffer_rs['ID']; ?>"><?php echo $delwhereweoffer_rs['name']; ?></a></p>
			
			<?php
			} while ($delwhereweoffer_rs=mysqli_fetch_assoc($delwhereweoffer_query));
			?>
</div>
</center>
  