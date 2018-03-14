<!DOCTYPE html>
<html>
  	  <?php
	    Include("application/AddOns/SearchScrip.php");
		require("application/DBConnect/dbconnect.php");
$username="root";
$password="";
$database="greenpedal831";
?>
  <head>
    <link href="application/css/Search.css" rel="stylesheet" type="text/css" />
    <title>Place searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
</head>
  <body>
  <?php
  	    Include("application/AddOns/Body/SearchPage.php");
  ?>
   <div id="map"></div>
    <script>
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAteFqg8f7tYTPgZ0tCUeXp-08KkN-d0s&callback=initMap">
    </script>
  </body>
</html>

