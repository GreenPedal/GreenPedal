<head>
  <link rel="stylesheet" href="application/css/AddOns.css"></link>
</head>
<?php
    $Posters_sql="SELECT * FROM posters";
    $Posters_query=mysqli_query($dbconnect, $Posters_sql);
    $Posters_rs=mysqli_fetch_assoc($Posters_query);
?>
<div class="margin">
    <div class="Gray">
      <?php 
	   do{
	  ?>
      <a href="<?php echo $Posters_rs['website']; ?>">
        <img  class="PosterImage" src="images/PoasterPics/<?php echo $Posters_rs ['pic']; ?>" />
        </img>
      </a>
    </div>
    <div class="Gray">
      <a href="
        <?php
		 echo $Posters_rs['website']; 
		?>">	
		<?php
	     } while ($Posters_rs=mysqli_fetch_assoc($Posters_query))
	    ?>
      </a>
    </div>
</div>


