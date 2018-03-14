<link href="application/css/Delivery.css" rel="stylesheet" type="text/css" />

<?php
	$Businesses_sql="SELECT * FROM businesses";
	$Businesses_query=mysqli_query($dbconnect, $Businesses_sql);
	$Businesses_rs=mysqli_fetch_assoc($Businesses_query);

	$DeliveryInfo_sql="SELECT * FROM deliverypage WHERE name='DeliveryInfo'";
	$DeliveryInfo_query=mysqli_query($dbconnect, $DeliveryInfo_sql);
	$DeliveryInfo_rs=mysqli_fetch_assoc($DeliveryInfo_query);


	$Deliveriesbox_sql="SELECT * FROM deliverypage WHERE name='Deliveriesbox'";
	$Deliveriesbox_query=mysqli_query($dbconnect, $Deliveriesbox_sql);
	$Deliveriesbox_rs=mysqli_fetch_assoc($Deliveriesbox_query);

	$otherDeliveries_sql="SELECT * FROM deliverypage WHERE name='otherDeliveries'";
	$otherDeliveries_query=mysqli_query($dbconnect, $otherDeliveries_sql);
	$otherDeliveries_rs=mysqli_fetch_assoc($otherDeliveries_query);

?>

  <head>
    <style>
      body, html {
      height: 100%;
      }

      .parallaxPaperBike {
      background-image:url(images/DeliveryPics/Papperbike.jpg);
      height: 100%;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      }



      .parallaxLogo {
      background-image:url(images/PagePics/blackGreenPedalLogo.jpg);
      height: 100%;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      }
      @media only screen and (max-device-width: 1024px) {
      .parallax1 {
      background-attachment: scroll;
      }
      }
    </style>
  </head>
