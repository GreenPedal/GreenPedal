<!DOCTYPE html>
<html>
  <head>
  <link href="application/css/event.css" rel="stylesheet" type="text/css" />
  <?php 
include ("application/AddOns//Parallax/parallaxEvent.php");
include("application/AddOns/Header.php");
include("application/DBConnect/dbconnect.php");
$eventpageInfo_sql="SELECT * FROM  eventpage WHERE name='eventInfo'";
$eventpageInfo_query=mysqli_query($dbconnect, $eventpageInfo_sql);
$eventpageInfo_rs=mysqli_fetch_assoc($eventpageInfo_query);  

$whatweoffer_sql="SELECT * FROM whatweoffer";
$whatweoffer_query=mysqli_query($dbconnect, $whatweoffer_sql);
$whatweoffer_rs=mysqli_fetch_assoc($whatweoffer_query);
  
$whereweoffer_sql="SELECT * FROM whereweoffer";
$whereweoffer_query=mysqli_query($dbconnect, $whereweoffer_sql);
$whereweoffer_rs=mysqli_fetch_assoc($whereweoffer_query);
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
</head>
<body>
  <?php 
  	include("application/AddOns/Body/EventPage.php");
  ?>
      </body>
  </html>
