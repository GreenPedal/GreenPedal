<link href="application/css/AddOns.css" rel="stylesheet" type="text/css" />
<?php
	include("application/AddOns/parallaxDelivery.php");
?>



<div class="column">
  <center>
    <a href="index.php?page=application/Links/Businesses">
    <div class="container">
    <div class="GrayS">
      <div class="blacktext">
      <p>
          <?php echo $Deliveriesbox_rs['words']; ?>
        </p>
      </div>
    </div>
    </div>
  </a>
  </center>
</div>

<div class="column">
  <center>
    <a href="index.php?page=application/Links/DeliveryQuestionnaire">
    <div class="container">
    <div class="GrayS">
      <div class="blacktext">
        <p>
          <?php echo $otherDeliveries_rs['words']; ?>
        </p>
      </div>
    </div>
  </div>
  </a>
  </center>
</div>

