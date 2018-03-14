
<?php
    $Posters_sql="SELECT * FROM posters";
    $Posters_query=mysqli_query($dbconnect, $Posters_sql);
    $Posters_rs=mysqli_fetch_assoc($Posters_query);

	 $FrontPosterbox_sql="SELECT * FROM frontpage WHERE name='AdvertisingBox'";
	$FrontPosterbox_query=mysqli_query($dbconnect, $FrontPosterbox_sql);
	$FrontPosterbox_rs=mysqli_fetch_assoc($FrontPosterbox_query); 

	$frontInfo_sql="SELECT * FROM frontpage WHERE name='Front Info'";
	$frontInfo_query=mysqli_query($dbconnect, $frontInfo_sql);
	$frontInfo_rs=mysqli_fetch_assoc($frontInfo_query);  
  
    $FrontDeliveries_sql="SELECT * FROM frontpage WHERE name='Deliveries'";
	$FrontDeliveries_query=mysqli_query($dbconnect, $FrontDeliveries_sql);
	$FrontDeliveries_rs=mysqli_fetch_assoc($FrontDeliveries_query); 
 
  
    $FrontEvents_sql="SELECT * FROM frontpage WHERE name='Events'";
	$FrontEvents_query=mysqli_query($dbconnect, $FrontEvents_sql);
	$FrontEvents_rs=mysqli_fetch_assoc($FrontEvents_query); 


		 $FrontDeliveriesbox_sql="SELECT * FROM frontpage WHERE name='Deliverybox'";
	$FrontDeliveriesbox_query=mysqli_query($dbconnect, $FrontDeliveriesbox_sql);
	$FrontDeliveriesbox_rs=mysqli_fetch_assoc($FrontDeliveriesbox_query); 

?>

  <head>
    <style>
      body, html {
      height: 100%;
      }


      .parallax {
      background-image:url(
      images/PagePics/FrontPage.jpg);
      height: 100%;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      }

      .parallax1 {
      background-image:url(images/PagePics/deliverysblack.jpg);
      height: 100%;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      }


      .parallaxEvent {
      background-image:url(images/EventsPics/Events2.jpg);
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

    </style>
  </head>

