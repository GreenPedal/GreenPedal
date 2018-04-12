		 <h3>Make a Delivery</h3>
          <p>this is where u make a delivery</p>
<div class="buttoncont">
  <div class="uptab">
	 <button class="uptablinks" onclick="openDelivery(event, 'Food')">Food Delivery</button>
	 <button class="uptablinks" onclick="openDelivery(event, 'Other')">Other Delivery</button>
  </div>
</div>
<div id="Food" class="uptabcontent"style="display:block;">
  <h3>Food</h3>
  <div class="beContainer">
    <div class="item">
      <div class="Gray">
         <?php do { ?>
         <a href="index.php?page=application/Pages/BusinessesProfile&Bus_ID=<?php echo $Businesses_rs['Bus_ID']; ?>">
         <img height="150" width="150" class="BusesImages" src="images/BusinessesPics/<?php echo $Businesses_rs ['Pic']; ?>" />
		 <center>
           <div class="whitetext">
             <?php echo $Businesses_rs['name']; ?>
           </div>
		 </center>
         </a>
      </div>
    </div>
    <div class="item">
       <div class="Gray">
         <a href="index.php?page=application/Pages/BusinessesProfile&Bus_ID=<?php echo $Businesses_rs['Bus_ID']; ?>">
            <?php } while ($Businesses_rs=mysqli_fetch_assoc($Businesses_query)) ?>
		 </a>
       </div>
    </div>
	<div id="Other" style="display:none;"class="uptabcontent">
    </div>
  </div>
 </div>
