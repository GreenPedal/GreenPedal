
<?php

 $FrontPosterbox_sql="SELECT * FROM frontpage WHERE name='AdvertisingBox'";
	$FrontPosterbox_query=mysqli_query($dbconnect, $FrontPosterbox_sql);
	$FrontPosterbox_rs=mysqli_fetch_assoc($FrontPosterbox_query); 
	
	$Posters_sql="SELECT * FROM posters";
	$Posters_query=mysqli_query($dbconnect, $Posters_sql);
	$Posters_rs=mysqli_fetch_assoc($Posters_query);

	$Advertisinginfo_sql="SELECT * FROM advertising WHERE name='Advertisinginfo'";
	$Advertisinginfo_query=mysqli_query($dbconnect, $Advertisinginfo_sql);
	$Advertisinginfo_rs=mysqli_fetch_assoc($Advertisinginfo_query);

		$BikeValet_sql="SELECT * FROM advertising WHERE name='BikeValet'";
	$BikeValet_query=mysqli_query($dbconnect, $BikeValet_sql);
	$BikeValet_rs=mysqli_fetch_assoc($BikeValet_query);

	$box1_sql="SELECT * FROM advertising WHERE name='box1'";
	$box1_query=mysqli_query($dbconnect, $box1_sql);
	$box1_rs=mysqli_fetch_assoc($box1_query);

	$box2_sql="SELECT * FROM advertising WHERE name='box2'";
	$box2_query=mysqli_query($dbconnect, $box2_sql);
	$box2_rs=mysqli_fetch_assoc($box2_query);

	$box3_sql="SELECT * FROM advertising WHERE name='box3'";
	$box3_query=mysqli_query($dbconnect, $box3_sql);
	$box3_rs=mysqli_fetch_assoc($box3_query);

	$box1info_sql="SELECT * FROM advertising WHERE name='box1info'";
	$box1info_query=mysqli_query($dbconnect, $box1info_sql);
	$box1info_rs=mysqli_fetch_assoc($box1info_query);

	$box2info_sql="SELECT * FROM advertising WHERE name='box2info'";
	$box2info_query=mysqli_query($dbconnect, $box2info_sql);
	$box2info_rs=mysqli_fetch_assoc($box2info_query);

	$box3info_sql="SELECT * FROM advertising WHERE name='box3info'";
	$box3info_query=mysqli_query($dbconnect, $box3info_sql);
	$box3info_rs=mysqli_fetch_assoc($box3info_query);



?>

<!DOCTYPE html>
<html>
  <link href="application/css/Advertising.css" rel="stylesheet" type="text/css" />

  <head>
    <style>
      body, html {
      height: 100%;
      }

      .parallax {
      background-image:url(images/advertisingPics/fristpage.jpg);
      height: 100%;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      }

      .parallax1 {
      background-image:url(images/advertisingPics/10533580_347967808686118_144590202_n.jpg);
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