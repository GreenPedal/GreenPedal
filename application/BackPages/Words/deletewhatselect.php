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
    <h1>Delete What We Offer</h1>
      <?php $delwhatweoffer_sql="SELECT * FROM whatweoffer";
			$delwhatweoffer_query=mysqli_query($dbconnect, $delwhatweoffer_sql);
			$delwhatweoffer_rs=mysqli_fetch_assoc($delwhatweoffer_query);
			do { ?>
			<p><a href="index.php?page=what/deletewhatconfirm&ID=
        
        <?php echo $delwhatweoffer_rs['ID']; ?>"><?php echo $delwhatweoffer_rs['name']; ?></a></p>
			
			<?php
			} while ($delwhatweoffer_rs=mysqli_fetch_assoc($delwhatweoffer_query));
			?>
</div>
</center>
  