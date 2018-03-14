<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="application/css/Footer.css"></link>
</head>
<?php
//DB to SocialMedia
 $SocialMedia_sql="SELECT * FROM socialmedia WHERE Bus_ID=0";
	$SocialMedia_query=mysqli_query($dbconnect, $SocialMedia_sql);
	$SocialMedia_rs=mysqli_fetch_assoc($SocialMedia_query);

	?>
<div class="leftcolumn">
    <h2>Social Media</h2>
      <?php do { ?>
      <a href="<?php echo $SocialMedia_rs['WebSite']; ?>">
      <img  class="image" src="images/SocialMedia/<?php echo $SocialMedia_rs ['Pic']; ?>" /></img>
      </a>
    
      <a href="
        <?php echo $SocialMedia_rs['WebSite']; ?>">	 <?php
  
	} while ($SocialMedia_rs=mysqli_fetch_assoc($SocialMedia_query)) ?>
      </a>
    </div>

  </html>