<!DOCTYPE html>
<html>
  <head>
    <?php
	include("application/AddOns//Parallax/parallaxDelivery.php");
  	include("application/AddOns/Header.php");
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
   </head>
  <body> 
<a href="index.php?page=application/Links/Search">
  <div class="GrayD"> 
	 <div class="whiteboxs"> 
		<center>
	      <?php echo $Deliveriesbox_rs['words']; ?>
	    </center>
     </div>
  </div> 
</a>
<a href="index.php?page=application/Links/DeliveryQuestionnaire">
   <div class="GrayD"> 
      <div class="whiteboxs1"> 
		 <center>
	        <?php echo $otherDeliveries_rs['words']; ?>
	     </center>
      </div>
   </div> 
</a>
<div class="parallaxPaperBike" ></div>
<div class=" parallaxLogo" ></div>
<div Style="margin-bottom:auto;">
   <?php include("application/AddOns/footer.php"); ?>
</div>

  </body>
</html>

