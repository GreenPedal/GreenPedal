<!DOCTYPE html>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
	<link href="application/css/Businesses.css" rel="stylesheet" type="text/css" />
	<link href="application/css/Phone/Businesses.css" rel="stylesheet" type="text/css" />

    <?php
    Include("application/AddOns/Businesses.php");
	include("application/AddOns/Header.php");
    ?>
</head>
  <body>
<div class="beContainer">
  <div class="item">
    <div class="Gray">
      <?php do { ?>
      <a href="index.php?page=application/Pages/BusinessesProfile&Bus_ID=<?php echo $Businesses_rs['Bus_ID']; ?>">
        <img height="150" width="150" class="BusesImages" src="images/BusinessesPics/<?php echo $Businesses_rs ['Pic']; ?>" />
		<center>
        <div class="whitetext">
          <?php echo $Businesses_rs['name']; ?>
        </div>
		</center>
      </a>
    </div>
  </div>
  <div class="item">
    <div class="Gray">
      <a href="index.php?page=application/Pages/BusinessesProfile&Bus_ID=<?php echo $Businesses_rs['Bus_ID']; ?>">

        <?php
  
	} while ($Businesses_rs=mysqli_fetch_assoc($Businesses_query)) ?>
      </a>
    </div>
  </div>
</div>
</body>
  </html>
