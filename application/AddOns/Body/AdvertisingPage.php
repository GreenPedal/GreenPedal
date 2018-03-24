<center>
   <div class="Avebox">
     <?php echo $Advertisinginfo_rs['words']; ?>
   </div>
</center>
<div class="parallax"></div>
<center>
      <div style="height:auto;background-color:black;color:white">
          <div class="avemargin">
            <center>
              <h2b><?php echo $box1_rs['words']; ?></h2b>
              <br>
              <p1><?php echo $box1info_rs['words']; ?></p1>
              </br>
              <h2b><?php echo $box2_rs['words']; ?></h2b>
              <br>
              <p1><?php echo $box2info_rs['words']; ?></p1>
              </br>
              <h2b><?php echo $box3_rs['words']; ?></h2b>
              <p1>
                <br>
                  <?php echo $box3info_rs['words']; ?>
                </br>
              </p1>
              <br>
                <a href="index.php?page=application/Links/AdvertisingQuestionnaire"><h4b> Contact Us </h4b>
                </a>
              </br>
            </center>
          </div>
      </div>
</center>
<div class="parallax1" ></div>
<center>
      <div style="height:370px;background-color:black;color:white ">
        <h2><?php echo $FrontPosterbox_rs['words']; ?></h2>
   
        <?php include("application/AddOns/Posters.php");?>
      </div>
</center>
<div class=" parallaxLogo" ></div>
<div Style="margin-bottom:auto;"<?php include("application/AddOns/footer.php"); ?></div>