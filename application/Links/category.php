<?php
    if(isset($_GET['Bus_ID']))
    $BUS_sql="SELECT businesses.Bus_ID, 
    businesses.name AS Bus_Name,
    Menu_Category.Cat_ID,
    Menu_Category.Cat_Name
    FROM businesses JOIN Menu_Category ON (businesses.Bus_ID=Menu_Category.Bus_ID) WHERE businesses.Bus_ID=".$_GET['Bus_ID'];
    if($BUS_query=mysqli_query($dbconnect, $BUS_sql))
	{
		$BUS_rs=mysqli_fetch_assoc($BUS_query);
	}
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
  <link href="application/css/Businesses.css" rel="stylesheet" type="text/css" />
  <link href="application/css/Phone/Businesses.css" rel="stylesheet" type="text/css" />
  <?php 
	  include("application/DBConnect/dbconnect.php");
      Include("application/AddOns/Businesses.php");
      include("application/AddOns/Header.php");
  ?>
</head>
<div class="beContainer">
  <div class="BusName">
     <?php echo $BUS_rs['Bus_Name']?>'s Menu
  </div>
  <div class="listCon">
    <mp>
      <?php do { ?>
        <a href="index.php?page=application/Links/Item&Cat_ID=
          <?php echo $BUS_rs['Cat_ID']; ?>">
          <br>
           <?php echo $BUS_rs['Cat_Name']; ?>
          </br>
        </a>
        <a href="index.php?page=application/Links/Item&Cat_ID=
           <?php echo $BUS_rs['Cat_ID']; ?>">
           <br>
           <?php
	        } while ($BUS_rs=mysqli_fetch_assoc($BUS_query))
	       ?>
           </br>
        </a>
    </mp>
  </div>
</div>

