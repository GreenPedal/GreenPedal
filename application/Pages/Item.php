<?php
    if(isset($_GET['Cat_ID']))
	$Menu_sql="
    SELECT menu_category.Cat_ID,
    menu_category.Cat_Name, 
    menu.Menu_ID,
    menu.Description,
    menu.SmallPrice as Msp,
    menu.BigPrice as Mbp,
    menu_category.SmallPrice as Csp,
    menu_category.BigPrice as Cbp,
    menu.name AS Menu_Name 
    FROM menu_category JOIN menu ON 
    (menu_category.Cat_ID=menu.Cat_ID) 
    WHERE menu_category.Cat_ID=".$_GET['Cat_ID'] ;
	if($Menu_query=mysqli_query($dbconnect, $Menu_sql)) {
		$Menu_rs=mysqli_fetch_assoc($Menu_query);
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
      <?php echo $Menu_rs['Cat_Name']?>
      <price>
        <?php echo $Menu_rs['Csp']?> 
        <?php echo $Menu_rs['Cbp']?>
      </price>
  </div>
  <div class="listCon">
     <?php do { ?>
     <br>
        <MainP>
		   <?php echo $Menu_rs['Menu_Name']; ?>
           <price> 
		     <?php echo $Menu_rs['Msp']?>
             <?php echo $Menu_rs['Mbp']?>
           </price>
        </MainP>
     </br>
     <mp>
	    <?php echo $Menu_rs['Description']; ?> </mp>
        <br>
        </br>
        <br>
          <?php
	         } while ($Menu_rs=mysqli_fetch_assoc($Menu_query))
	      ?>
        </br>
     </mp>
  </div>
</div>