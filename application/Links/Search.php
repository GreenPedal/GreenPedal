﻿<?php
$conn = mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("greenpedal831") or die(mysql_error());
?>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title>Google Maps</title>
<style type="text/css">
  body { font: normal 10pt Helvetica, Arial; }
	#map { width: 1200px; height: 800px; border: 0px; padding: 0px; }
</style>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyAAteFqg8f7tYTPgZ0tCUeXp&sensor=false" type="text/javascript"></script>
<script type="text/javascript">
	//Borrowed the code from http://stackoverflow.com/questions/15633604/php-mysql-google-map
	var icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/micons/blue.png",
			   new google.maps.Size(32, 32), new google.maps.Point(0, 0),
			   new google.maps.Point(16, 32));
	var center = null;
	var map = null;
	var currentPopup;
	var bounds = new google.maps.LatLngBounds();
	function addMarker(lat, lng) {
		var pt = new google.maps.LatLng(lat, lng);
		bounds.extend(pt);
		var marker = new google.maps.Marker({
			position: pt,
			icon: icon,
			map: map
		});
		var popup = new google.maps.InfoWindow({
			content: info,
			maxWidth: 300
		});
		google.maps.event.addListener(marker, "click", function() {
			if (currentPopup != null) {
				currentPopup.close();
				currentPopup = null;
			}
			popup.open(map, marker);
			currentPopup = popup;
		});
		google.maps.event.addListener(popup, "closeclick", function() {
			map.panTo(center);
			currentPopup = null;
		});
	}           
	function initMap() {
		map = new google.maps.Map(document.getElementById("map"), {
			center: new google.maps.LatLng(0, 0),
			zoom: 14,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			mapTypeControl: true,
			mapTypeControlOptions: {
				style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
			},
			navigationControl: true,
			navigationControlOptions: {
				style: google.maps.NavigationControlStyle.ZOOM_PAN
			}
		});
<?php
$query = mysql_query("SELECT * FROM businesses")or die(mysql_error());
while($row = mysql_fetch_array($query))
{
  $name = $row['tst'];
  $lat = $row['lat'];
  $lng = $row['lng'];
  echo("addMarker($lat, $lng, '<b>$name</b>);
}
?>
 center = bounds.getCenter();
     map.fitBounds(bounds);
     }
 </script>
 
 </head>
 <body onload="initMap()" style="margin:0px; border:0px; padding:0px;">
 <div id="map"></div>
 </body>
 </html>