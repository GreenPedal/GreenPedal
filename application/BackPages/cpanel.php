
  <?php
	include("application/DBConnect/dbconnect.php");
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
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
?>
<center>
  <?php  include("application/AddOns/header.php");?>
  <div class="text">
<h1>Front Page</h1>
    <?php do { ?>
    <p>
      <a href="index.php?page=frontpage/editfrontpage&words_ID=
        <?php echo $frontpage_rs['words_ID']; ?>"><?php echo $frontpage_rs['name']; ?>
      </a>
    </p>
    <?php
	} while ($frontpage_rs=mysqli_fetch_assoc($frontpage_query)) ?>
  </div>
  
  <div class="text">
    <h1>Delivery Page</h1>
    <?php do { ?>
    <p>
      <a href="index.php?page=Deliverypage/editDeliverypage&ID=
        
        <?php echo $Deliverypage_rs['ID']; ?>"><?php echo $Deliverypage_rs['name']; ?>
      </a>
    </p>
    <?php
	} while ($Deliverypage_rs=mysqli_fetch_assoc($Deliverypage_query)) ?>

  <p>
      <a href="index.php?page=Businesses/adminBusinesses">Businesses</a>
    </p>
    <p>
      <a href="index.php?page=services/services">Services</a>
    </p>
  </div>
  

  <div class="text">
    <h1>Advertising Page</h1>
    <?php do { ?>
    <p>
      <a href="index.php?page=advertising/editadvertising&ID=
        
        <?php echo $advertising_rs['ID']; ?>"><?php echo $advertising_rs['name']; ?>
      </a>
    </p>
    <?php
	} while ($advertising_rs=mysqli_fetch_assoc($advertising_query)) ?>

    </p>

      <p>
      <a href="index.php?page=Posters/adminPosters">Posters</a>
    </p>
  </div>


  <div class="text">
    <h1>Event Page</h1>
    <?php do { ?>
    <p>
      <a href="index.php?page=EventPage/editEventPage&ID=
        
        <?php echo $EventPage_rs['ID']; ?>"><?php echo $EventPage_rs['name']; ?>
      </a>
    </p>
    <?php
	} while ($EventPage_rs=mysqli_fetch_assoc($EventPage_query)) ?>

    <p>
      <a href="index.php?page=what/what">What</a>
    </p>
    <p>
      <a href="index.php?page=where/where">Where</a>
    </p>
   

  </div>
  <div class="text">
  <p>
    <a href="index.php?page=admin&action=logout">Logout</a>
  </p>
  </div>

</center>