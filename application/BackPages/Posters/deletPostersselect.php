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
    <h1>Delete Posters</h1>
      <?php $delPosters_sql="SELECT * FROM Posters";
			$delPosters_query=mysqli_query($dbconnect, $delPosters_sql);
			$delPosters_rs=mysqli_fetch_assoc($delPosters_query);
			do { ?>
			<p><a href="index.php?page=Posters/deletePostersconfirm&ID=
        <?php echo $delPosters_rs['ID']; ?>"><?php echo $delPosters_rs['name']; ?></a></p>

			<?php
			} while ($delPosters_rs=mysqli_fetch_assoc($delPosters_query));
			?></div>
</center>
