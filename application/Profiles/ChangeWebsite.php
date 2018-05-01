      <div class="changewordtab">
	      <button class="changewordlinks" onclick="wordPages(event, 'FrontP')" id="wordsdefaultOpen">Front</button>
	      <button class="changewordlinks" onclick="wordPages(event, 'DeliveryP')">Delivery</button>
		  <button class="changewordlinks" onclick="wordPages(event, 'AdvertisingP')">Advertising</button>
		  <button class="changewordlinks" onclick="wordPages(event, 'EventsP')">Events</button>
	  </div>
	  <div id="FrontP" class="ChangewordContent">
	   <?php do { ?>
        <h1><?php echo $frontpage_rs['name']; ?></h1></br>
		<?php echo $frontpage_rs['words'];?></br>
			  <a href="index.php?page=application/BackPages/Words/editfrontpage&words_ID=<?php echo $frontpage_rs['words_ID']; ?>">
		        </br> <button type="button"  style="margin-top:15px">Change</button>
		     </a>
		<?php } while ($frontpage_rs=mysqli_fetch_assoc($frontpage_query)) ?>
	  </div>
      <div id="DeliveryP" class="ChangewordContent">
        <?php do { ?>
        <p>
		    <h1><?php echo $Deliverypage_rs['name']; ?></h1></br>
		    <?php echo $Deliverypage_rs['words']; ?></br>
	       <a href="index.php?page=application/BackPages/Words/editDeliverypage&ID=<?php echo $Deliverypage_rs['ID']; ?>">
		    </br><button type="button" style="margin-top:15px">Change</button>
		   </a>
        </p>
        <?php } while ($Deliverypage_rs=mysqli_fetch_assoc($Deliverypage_query)) ?>
      </div>
	  <div id="AdvertisingP" class="ChangewordContent">
       <?php do { ?>
       <p>
        <h1><?php echo $advertising_rs['name']; ?></h1>
		<?php echo $advertising_rs['words']; ?></br>
	       <a href="index.php?page=application/BackPages/Words/editadvertising&ID=<?php echo $advertising_rs['ID']; ?>">
		    </br><button type="button" style="margin-top:15px">Change</button>
		   </a>
       </p>
       <?php } while ($advertising_rs=mysqli_fetch_assoc($advertising_query)) ?>
      </div>
	  <div id="EventsP" class="ChangewordContent">
        <?php do { ?>
        <p>
           <h1><?php echo $EventPage_rs['name']; ?></h1>
		   <?php echo $EventPage_rs['words']; ?>
	       <a href="index.php?page=application/BackPages/Words/editEventPage&ID=<?php echo $EventPage_rs['ID']; ?>">
		     </br><button type="button" style="margin-top:15px">Change</button>
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
<script>
function wordPages(evt, cityName) {
    var i, ChangewordContent, changewordlinks;
    ChangewordContent = document.getElementsByClassName("ChangewordContent");
    for (i = 0; i < ChangewordContent.length; i++) {
        ChangewordContent[i].style.display = "none";
    }
    changewordlinks = document.getElementsByClassName("changewordlinks");
    for (i = 0; i < changewordlinks.length; i++) {
        changewordlinks[i].className = changewordlinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("wordsdefaultOpen").click();




</script>