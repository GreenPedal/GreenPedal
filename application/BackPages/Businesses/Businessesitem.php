<center>
  <?php  include("header.php");?>

  <div class="text">
    <?php
	if(!isset($_GET['Bus_ID'])) {
		header("Location: index.php");
	}
	$Businesses_sql="SELECT * FROM Businesses WHERE Bus_ID=".$_GET['Bus_ID'];
	if($Businesses_query=mysqli_query($dbconnect, $Businesses_sql)) {
		$Businesses_rs=mysqli_fetch_assoc($Businesses_query);
		?>
		<p><img height="200" width="200" src="images/<?php echo $Businesses_rs ['Pic']; ?>" /></p>
		<h1><?php echo $Businesses_rs['name']; ?></h1>
		<p><a href=" <?php echo $Businesses_rs ['website']; ?>"><h1><?php echo $Businesses_rs['name']; ?></h1>
		<?php
	}
?>
</center>

