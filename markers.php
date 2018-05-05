<?php
	include("application/DBConnect/dbconnect.php");


	$dbcon = mysqli_connect($host, $user, $pass, $db);
	if(mysqli_connect_errno()) {
		echo "Connection failed:".mysqli_connect_error();
		exit;
	}
  $Businesses_sql="SELECT * FROM businesses WHERE 1 ";
	$Businesses_query=mysqli_query($dbcon, $Businesses_sql);
	



function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}




header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
while ($row = mysqli_fetch_assoc($Businesses_query)){
  // Add to XML document node
  echo '<marker ';
  echo 'Bus_ID="' . $row['Bus_ID'] . '" ';
  echo 'name="' . parseToXML($row['name']) . '" ';
  echo 'motto="' . parseToXML($row['motto']) . '" ';
  echo 'address="' . parseToXML($row['address']) . '" ';
  echo 'logo="' . $row['Pic'] . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  echo 'type="' . $row['type'] . '" ';
  echo 'website="' . $row['website'] . '" ';
  echo '/>';
  $ind = $ind + 1;
}

// End XML file
echo '</markers>';

?>