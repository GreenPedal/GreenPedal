  <?php
	include("application/DBConnect/dbconnect.php");
	unset($_SESSION['editadvertising']);
	
	$what_sql="SELECT * FROM whatweoffer";
	$what_query=mysqli_query($dbconnect, $what_sql);
	$what_rs=mysqli_fetch_assoc($what_query);
  
  	unset($_SESSION['editwhat']);
	
	$advertising_sql="SELECT * FROM advertising";
	$advertising_query=mysqli_query($dbconnect, $advertising_sql);
	$advertising_rs=mysqli_fetch_assoc($advertising_query);

	unset($_SESSION['editfrontpage']);
	
	$frontpage_sql="SELECT * FROM frontpage";
	$frontpage_query=mysqli_query($dbconnect, $frontpage_sql);
	$frontpage_rs=mysqli_fetch_assoc($frontpage_query);
  
    $Deliverypage_sql="SELECT * FROM deliverypage";
	$Deliverypage_query=mysqli_query($dbconnect, $Deliverypage_sql);
	$Deliverypage_rs=mysqli_fetch_assoc($Deliverypage_query);
  
    $EventPage_sql="SELECT * FROM  eventpage";
	$EventPage_query=mysqli_query($dbconnect, $EventPage_sql);
	$EventPage_rs=mysqli_fetch_assoc($EventPage_query);

	
	$frontimg_sql="SELECT * FROM images";
	$frontimg_query=mysqli_query($dbconnect, $frontimg_sql);
	$frontimg_rs=mysqli_fetch_assoc($frontimg_query);
  ?>
<button class="accordion"><h1>Words</h1></button>
<div class="panel">
     <button class="accordion"><h1>Frount</h1></button>
	 <div class="panel">
	   <?php do { ?>
       <p>
		   <a href="index.php?page=application/BackPages/Words/editfrontpage&ID=
             <?php echo $frontpage_rs['words_ID']; ?>"><?php echo $frontpage_rs['name']; ?>
		   </a>
       </p>
       <?php } while ($frontpage_rs=mysqli_fetch_assoc($frontpage_query)) ?>
	 </div>
     <button class="accordion"><h1>Delivery</h1></button>
	 <div class="panel">
        <?php do { ?>
        <p>
          <a href="index.php?page=application/BackPages/Delivery/editDeliverypage&ID=
           <?php echo $Deliverypage_rs['ID']; ?>"><?php echo $Deliverypage_rs['name']; ?>
          </a>
        </p>
        <?php } while ($Deliverypage_rs=mysqli_fetch_assoc($Deliverypage_query)) ?>
     </div>
     <button class="accordion"><h1>Advertising</h1></button>
	 <div class="panel">
       <?php do { ?>
       <p>
         <a href="index.php?page=application/BackPages/Advertising/editadvertising&ID=
          <?php echo $advertising_rs['ID']; ?>"><?php echo $advertising_rs['name']; ?>
         </a>
       </p>
       <?php } while ($advertising_rs=mysqli_fetch_assoc($advertising_query)) ?>
       <p>
         <a href="index.php?page=application/BackPages/Posters/adminPosters">Posters</a>
       </p>
     </div>
     <button class="accordion"><h1>Events</h1></button>
	 <div class="panel">
        <?php do { ?>
        <p>
          <a href="index.php?page=application/BackPages/Events/editEventPage&ID=
            <?php echo $EventPage_rs['ID']; ?>"><?php echo $EventPage_rs['name']; ?>
          </a>
        </p>
        <?php } while ($EventPage_rs=mysqli_fetch_assoc($EventPage_query)) ?>
        <p>
           <a href="index.php?page=application/BackPages/Words/what">What</a>
        </p>
        <p>
          <a href="index.php?page=application/BackPages/Words/where">Where</a>
        </p>
     </div>
</div>
<button class="accordion"><h1>Images</h1></button>
<div class="panel">
     <button class="accordion"><h1>Frount</h1></button>
	 <div class="imgpanel">
	      <?php do { ?>
	      <?php echo $frontimg_rs['Where']; ?></br>
          <p>
			 <img class="Cimage" src="images/PagePics/<?php echo $frontimg_rs['Pic']; ?>"</img>
          </p>
          <?php } while ($frontimg_rs=mysqli_fetch_assoc($frontimg_query)) ?>
	 </div>
     <button class="accordion"><h1>Delivery</h1></button>
	 <div class="panel">
        <?php do { ?>
        <p>
          <a href="index.php?page=application/BackPages/Delivery/editDeliverypage&ID=
           <?php echo $Deliverypage_rs['ID']; ?>"><?php echo $Deliverypage_rs['name']; ?>
          </a>
        </p>
        <?php } while ($Deliverypage_rs=mysqli_fetch_assoc($Deliverypage_query)) ?>
     </div>
     <button class="accordion"><h1>Advertising</h1></button>
	 <div class="panel">
        <?php do { ?>
        <p>
          <a href="index.php?page=application/BackPages/Events/editEventPage&ID=
            <?php echo $EventPage_rs['ID']; ?>"><?php echo $EventPage_rs['name']; ?>
          </a>
        </p>
        <?php } while ($EventPage_rs=mysqli_fetch_assoc($EventPage_query)) ?>
     </div>
     <button class="accordion"><h1>Events</h1></button>
	 <div class="panel">
        <?php do { ?>
        <p>
          <a href="index.php?page=application/BackPages/Events/editEventPage&ID=
            <?php echo $EventPage_rs['ID']; ?>"><?php echo $EventPage_rs['name']; ?>
          </a>
        </p>
        <?php } while ($EventPage_rs=mysqli_fetch_assoc($EventPage_query)) ?>

     </div>
</div>
