<center>
  <?php  include("header.php");?>

  <div class="text">
    <?php
	if(!isset($_GET['ID'])) {
		header("Location: index.php");
	}
	$Posters_sql="SELECT * FROM Posters WHERE ID=".$_GET['ID'];
	if($Posters_query=mysqli_query($dbconnect, $Posters_sql)) {
		$Posters_rs=mysqli_fetch_assoc($Posters_query);
		?>
		<p><img height="200" width="200" src="images/<?php echo $Posters_rs ['pic']; ?>" /></p>
		<h1>
      <?php echo $Posters_rs['name']; ?></h1>
		<a href=" 
      <?php echo $Posters_rs ['website']; ?>"><h1>
      <?php echo $Posters_rs['name']; ?></a>
		<?php
	}
?>
    </div>
</center>

