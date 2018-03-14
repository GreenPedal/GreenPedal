<?php
$Businesses_sql="SELECT * FROM businesses";
	$Businesses_query=mysqli_query($dbconnect, $Businesses_sql);
	$Businesses_rs=mysqli_fetch_assoc($Businesses_query);

	?>
<?php
	include("navigation.php");
?>

	<div class="DeliContainer">
	<div class="item">
	<div class="Gray">
    <?php do { ?>
    <a href="<?php echo $Businesses_rs['website']; ?>"><img height="150" width="150" class="images2" src="images/<?php echo $Businesses_rs ['Pic']; ?>" />
      <div class="whitetext"><?php echo $Businesses_rs['name']; ?>
      </div>
    </a>
	  </div>
  </div>
   
   <div class="item">
   <div class="Gray">
     <a href=""<?php echo $Businesses_rs['website']; ?>">	 <?php
  
	} while ($Businesses_rs=mysqli_fetch_assoc($Businesses_query)) ?>
     </a>
	  </div>
	</div>
	</div>
 