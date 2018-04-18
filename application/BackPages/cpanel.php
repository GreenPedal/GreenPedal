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

	unset($_SESSION['frontpage']);
	
	$frontpage_sql="SELECT * FROM frontpage";
	$frontpage_query=mysqli_query($dbconnect, $frontpage_sql);
	$frontpage_rs=mysqli_fetch_assoc($frontpage_query);
		
	unset($_SESSION['Deliverypage']);
  
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
  <style>
  .changetab {
   color:whtie;
    float: left;
    border: 1px solid white;
    background-color: black;
    width: 20%;
    height: auto;
}

.changetab button {
        display: block;
        background-color: inherit;
        color: white;
        padding: 22px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 17px;
    }

.changetab button:hover {
            background-color: Green;
        }

.changetab button.active {
            background-color: forestgreen;
        }

.changetabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 90%;
    border-left: none;
    height: auto;
    margin-left:20px;
}
.ChangeContent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 90%;
    border-left: none;
    height: auto;
}
.changeBox{
    float:left;
    width:70%;

}


  </style>
<button class="accordion"><h1>Words</h1></button>
<div class="panel">
	 <div class="changetab">
	      <button class="changelinks" onclick="openPages(event, 'FrontP')">Front</button>
	      <button class="changelinks" onclick="openPages(event, 'DeliveryP')">Delivery</button>
		  <button class="changelinks" onclick="openPages(event, 'AdvertisingP')">Advertising</button>
		  <button class="changelinks" onclick="openPages(event, 'EventsP')">Events</button>
	 </div>
   <div class="changeBox">
	 <div id="FrontP" class="ChangeContent">
	   <?php do { ?>
       <p>
        <h1><?php echo $frontpage_rs['name']; ?></h1></br>
		 <?php echo $frontpage_rs['words'];?></br>
         <a href="index.php?page=application/BackPages/Words/editfrontpage&words_ID=<?php echo $frontpage_rs['words_ID']; ?>">
		    <button type="button" style="top:10px">Change</button>
		 </a>
       </p>
       <?php } while ($frontpage_rs=mysqli_fetch_assoc($frontpage_query)) ?>
	 </div>
	 <div id="DeliveryP" class="ChangeContent">
        <?php do { ?>
        <p>
		    <h1><?php echo $Deliverypage_rs['name']; ?></h1></br>
		    <?php echo $Deliverypage_rs['words']; ?></br>
	       <a href="index.php?page=application/BackPages/Words/editDeliverypage&ID=<?php echo $Deliverypage_rs['ID']; ?>">
		    <button type="button" style="top:10px">Change</button>
		   </a>
        </p>
        <?php } while ($Deliverypage_rs=mysqli_fetch_assoc($Deliverypage_query)) ?>
     </div>
	 <div id="AdvertisingP" class="ChangeContent">
       <?php do { ?>
       <p>
        <h1><?php echo $advertising_rs['name']; ?></h1>
		<?php echo $advertising_rs['words']; ?></br>
	       <a href="index.php?page=application/BackPages/Words/editadvertising&ID=<?php echo $advertising_rs['ID']; ?>">
		    <button type="button" style="top:10px">Change</button>
		   </a>
       </p>
       <?php } while ($advertising_rs=mysqli_fetch_assoc($advertising_query)) ?>
     </div>
	 <div id="EventsP" class="ChangeContent">
        <?php do { ?>
        <p>
           <h1><?php echo $EventPage_rs['name']; ?></h1>
		   <?php echo $EventPage_rs['words']; ?>
	       <a href="index.php?page=application/BackPages/Words/editEventPage&ID=<?php echo $EventPage_rs['ID']; ?>">
		    <button type="button" style="top:10px">Change</button>
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
	 <div class="imgpanel">
        <?php do { ?>
        <p>
          <a href="index.php?page=application/BackPages/Delivery/editDeliverypage&ID=
           <?php echo $Deliverypage_rs['ID']; ?>"><?php echo $Deliverypage_rs['name']; ?>
          </a>
        </p>
        <?php } while ($Deliverypage_rs=mysqli_fetch_assoc($Deliverypage_query)) ?>
     </div>
     <button class="accordion"><h1>Advertising</h1></button>
	 <div class="imgpanel">
        <?php do { ?>
        <p>
          <a href="index.php?page=application/BackPages/Events/editEventPage&ID=
            <?php echo $EventPage_rs['ID']; ?>"><?php echo $EventPage_rs['name']; ?>
          </a>
        </p>
        <?php } while ($EventPage_rs=mysqli_fetch_assoc($EventPage_query)) ?>
     </div>
     <button class="accordion"><h1>Events</h1></button>
	 <div class="imgpanel">
        <?php do { ?>
        <p>
          <a href="index.php?page=application/BackPages/Events/editEventPage&ID=
            <?php echo $EventPage_rs['ID']; ?>"><?php echo $EventPage_rs['name']; ?>
          </a>
        </p>
        <?php } while ($EventPage_rs=mysqli_fetch_assoc($EventPage_query)) ?>

     </div>
</div>
  <script>
    function openPages(evt, PageName) {
    var i, ChangeContent, changelinks;
    ChangeContent = document.getElementsByClassName("ChangeContent");
    for (i = 0; i < ChangeContent.length; i++) {
        ChangeContent[i].style.display = "none";
    }
    changelinks = document.getElementsByClassName("changelinks");
    for (i = 0; i < changelinks.length; i++) {
        changelinks[i].PageName = changelinks[i].PageName.replace(" active", "");
    }
    document.getElementById(openPages).style.display = "block";
    evt.currentTarget.className += " active";
  }
  document.getElementById("defaultOpen").click();


      var acc = document.getElementsByClassName("accordion");
    var i;
    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}


    var acc = document.getElementsByClassName("accordion");
    var i;
    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var imgpanel = this.nextElementSibling;
        if (imgpanel.style.display === "block") {
            imgpanel.style.display = "none";
        } else {
            imgpanel.style.display = "block";
        }
    });
}
</script>

