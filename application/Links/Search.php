<?php
  $username="root";
  $password="";
  $database="GreenPedal";

  // Start XML file, create parent node
  $doc = domxml_new_doc("1.0");
  $node = $doc->create_element("markers");
  $parnode = $doc->append_child($node);

  // Opens a connection to a MySQL server
  $connection=mysql_connect ('localhost', $username, $password);
  if (!$connection) {
    die('Not connected : ' . mysql_error());
  }

  // Set the active MySQL database
  $db_selected = mysql_select_db($database, $connection);
  if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
  }

  // Select all the rows in the businesses table
  $query = "SELECT * FROM businesses WHERE 1";
  $result = mysql_query($query);
  if (!$result) {
    die('Invalid query: ' . mysql_error());
  }

  header("Content-type: text/xml");

  // Iterate through the rows, adding XML nodes for each
  while ($row = @mysql_fetch_assoc($result)){
    // Add to XML document node
    $node = $doc->create_element("businesses");
    $newnode = $parnode->append_child($node);

    $newnode->set_attribute("Bus_ID", $row['Bus_ID']);
    $newnode->set_attribute("name", $row['name']);
    $newnode->set_attribute("address", $row['address']);
    $newnode->set_attribute("lat", $row['lat']);
    $newnode->set_attribute("lng", $row['lng']);
  }

  $xmlfile = $doc->dump_mem();
  echo $xmlfile;

  function parseToXML($htmlStr)
  {
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    return $xmlStr;
  }

  // Opens a connection to a MySQL server
  $connection=mysqli_connect ('localhost', $username, $password);
  if (!$connection) {
   die('Not connected : ' . mysqli_error());
  }

  // Set the active MySQL database
  $db_selected = mysqli_select_db($database, $connection);
  if (!$db_selected) {
   die ('Can\'t use db : ' . mysqli_error());
  }

  // Select all the rows in the businesses table
  $query = "SELECT * FROM businesses WHERE 1";
  $result = mysqli_query($query);
  if (!$result) {
   die('Invalid query: ' . mysqli_error());
  }

  header("Content-type: text/xml");

  // Start XML file, echo parent node
  echo "<?xml version='1.0' ?>";
  echo '<businesses>';
  $ind=0;
  // Iterate through the rows, printing XML nodes for each
  while ($row = @mysqli_fetch_assoc($result)){
    // Add to XML document node
    echo '<marker ';
    echo 'Bus_ID="' . $row['Bus_ID'] . '" ';
    echo 'name="' . parseToXML($row['name']) . '" ';
    echo 'address="' . parseToXML($row['address']) . '" ';
    echo 'lat="' . $row['lat'] . '" ';
    echo 'lng="' . $row['lng'] . '" ';
    echo '/>';
    $ind = $ind + 1;
  }
  // End XML file
  echo '</businesses>';

  // Start XML file, create parent node

  $dom = new DOMDocument("1.0");
  $node = $dom->createElement("markers");
  $parnode = $dom->appendChild($node);

  // Opens a connection to a MySQL server

  $connection=mysql_connect ('localhost', $username, $password);
  if (!$connection) {  die('Not connected : ' . mysql_error());}

  // Set the active MySQL database

  $db_selected = mysql_select_db($database, $connection);
  if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
  }

  // Select all the rows in the businesses table

  $query = "SELECT * FROM businesses WHERE 1";
  $result = mysql_query($query);
  if (!$result) {
    die('Invalid query: ' . mysql_error());
  }

  header("Content-type: text/xml");

  // Iterate through the rows, adding XML nodes for each

  while ($row = @mysql_fetch_assoc($result)){
    // Add to XML document node
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("id",$row['id']);
    $newnode->setAttribute("name",$row['name']);
    $newnode->setAttribute("address", $row['address']);
    $newnode->setAttribute("lat", $row['lat']);
    $newnode->setAttribute("lng", $row['lng']);
    $newnode->setAttribute("type", $row['type']);
  }

  echo $dom->saveXML();
?>
<script>
   function downloadUrl(url,callback) {
     var request = window.ActiveXObject ?
     new ActiveXObject('Microsoft.XMLHTTP') :
     new XMLHttpRequest;

     request.onreadystatechange = function() {
       if (request.readyState == 4) {
        request.onreadystatechange = doNothing;
        callback(request, request.status);
       }
     };

     request.open('GET', url, true);
     request.send(null);
   }
   downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
   var xml = data.responseXML;
   var markers = xml.documentElement.getElementsByTagName('marker');
   Array.prototype.forEach.call(markers, function(markerElem) {
     var id = markerElem.getAttribute('id');
     var name = markerElem.getAttribute('name');
     var address = markerElem.getAttribute('address');
     var type = markerElem.getAttribute('type');
     var point = new google.maps.LatLng(
        parseFloat(markerElem.getAttribute('lat')),
        parseFloat(markerElem.getAttribute('lng')));

        var infowincontent = document.createElement('div');
        var strong = document.createElement('strong');
        strong.textContent = name
        infowincontent.appendChild(strong);
        infowincontent.appendChild(document.createElement('br'));

        var text = document.createElement('text');
        text.textContent = address
        infowincontent.appendChild(text);
        var icon = customLabel[type] || {};
        var marker = new google.maps.Marker({
        map: map,
        position: point,
        label: icon.label
   });
   var customLabel = {
     restaurant: {
       label: 'R'
     },
     bar: {
     label: 'B'
     }
   };
   marker.addListener('click', function() {
     infoWindow.setContent(infowincontent);
     infoWindow.open(map, marker);
   });
</script>