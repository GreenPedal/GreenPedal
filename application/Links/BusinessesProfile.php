<!DOCTYPE html>
<html>
<?php
    if(isset($_GET['Bus_ID']))
	{
      $_SESSION['Businesses']['words_ID']=$_GET['Bus_ID'];
    }
    if(!isset($_SESSION['Businesses']['words'])) 
	{
      $Businesses_sql="SELECT * FROM  businesses WHERE Bus_ID=".$_GET['Bus_ID'];
      $Businesses_query=mysqli_query($dbconnect, $Businesses_sql);
      $Businesses_rs=mysqli_fetch_assoc($Businesses_query);
      $_SESSION['Businesses']['name']=$Businesses_rs['name']; 
      $_SESSION['Businesses']['Pic']=$Businesses_rs['Pic'];
      $_SESSION['Businesses']['motto']=$Businesses_rs['motto'];
      $_SESSION['Businesses']['about']=$Businesses_rs['about'];
      $_SESSION['Businesses']['website']=$Businesses_rs['website'];
   	  $BUS_sql="SELECT businesses.Bus_ID, 
      socialmedia.Bus_ID,
      socialmedia.WebSite as SoWeb,
      socialmedia.Pic as SoPic
      FROM businesses JOIN socialmedia ON (businesses.Bus_ID=socialmedia.Bus_ID) WHERE businesses.Bus_ID=".$_GET['Bus_ID'];
	  if($BUS_query=mysqli_query($dbconnect, $BUS_sql)) 
	  {
		$BUS_rs=mysqli_fetch_assoc($BUS_query);
	  }
	}
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
  <link href="application/css/Businesses.css" rel="stylesheet" type="text/css" />
  <link href="application/css/Phone/Businesses.css" rel="stylesheet" type="text/css" />
  <?php
  	include("application/AddOns/Header.php");
    Include("application/AddOns/Businesses.php");
  ?>
</head>
<body>
  <?php
  Include("application/AddOns/Body/BusinessesProfile.php");
    ?>
</body>
</html>



