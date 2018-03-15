    <center>
      <div class="PicBox">
       <img height="100%" src="images/PagePics/GreenPedal831.jpg" alt="Home" />
        </img>
      </div>
		</center>
    <fadeleft>
      Scroll
    </fadeleft>
      <faderight>
        Down
      </faderight>

      <div class="parallax"></div>
	<div class= "GreenBox">
	  <div class="compmargin">
    <?php echo $frontInfo_rs['words']; ?>
  </div>
    </div>

    <?php //Delivery Button?>
	 <a href="index.php?page=application/FrontPages/DeliverysPage">
	<div class="GrayS">
	 <div class="leftbox"> 
		 <div class="right" style="background-color:white;">
		 <?php echo $FrontDeliveries_rs['words']; ?>
        </div>
        <div class="left" style="background-color:white;">
          <img width="100%" src="images/DeliveryPics/deliverys2.jpg" alt="Deliverys"></img>
		  </div>
      </div>
  </div> 
   </a>
    <div class="parallax1" ></div>
    <?php //Posters?>
	<div class="BlackBox">
	<center>
    <div class="fpwords">
	<?php echo $FrontPosterbox_rs['words']; ?>
    </div>
	</center>
    <br>
	<?php
	include("application/AddOns/Posters.php");
?>
    </br>
    <center>
    <div class="bottomwords">
        Click on a Poster to get your tickets
      </div>
    </center>
    </div>
    <?php //Events button?>
			 <a href="index.php?page=application/FrontPages/EventPage"> 
		  <div class="GrayS">
		   <div class="rightbox"> 
				  <div class="left1" style="background-color:white">
            <?php echo $FrontEvents_rs['words']; ?>
        </div>
        <div class="right1" style="background-color:white;">
          <img width="100%" src="images/EventsPics/FoodCart1.jpg" alt="Deliverys" ></img>
		    </div>	
      </div>
  </div> 
   </a>
		  <div class="parallaxEvent" ></div>
		  <div class=" parallaxLogo" ></div>
    <div class="homefooter">
		  		<div Style="margin-bottom:auto;"<?php include("application/AddOns/footer.php"); ?></div>
    </div>
    <div class="PhoneShow">
      <center>
        <div class="greenwords">
          GreenPedal
          <p>831</p>
        </div>
        <div class="phonelongo">
          <img height="100%" src="images/PagePics/blackGreenPedalLogo.jpg" alt="Home" />
          </img>
        </div>
        <div class="greenwords2">
          GreenPedal
          <p>831</p>
        </div>

      </center>
      <a href="index.php?page=application/Links/Businesses">
        <div class="Buttoncall">
          <div class="PhoneButtones">
            Food Delivery
          </div>
        </div>
      </a>
      <div class="Buttoncall"></div>
      <a href="index.php?page=application/Links/DeliveryQuestionnaire">
        <div class="Buttoncall">
          <div class="PhoneButtones2">
            Other Delivery
          </div>
        </div>
      </a>
    </div>

  
