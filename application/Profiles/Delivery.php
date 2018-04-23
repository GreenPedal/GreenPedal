<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
	<link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />
  </head>

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
    <div style="width:100%;height:40%;">
       <div id="map"></div>
       <div id="mapkey"></div>
    </div>
</div>
<div id="Other" style="display:none;"class="uptabcontent">
	    <h3>Other</h3>
		<div style="width:100%;height:30%;">
			<div style="width:30%;float:left;color:green;">
              Pick Up Address:
              <select name="PickUp">
               <option value="">Select...</option>
               <?php do { ?>
               <option ><?php echo $PickUp_rs['Name'];?></option>
               <?php } while ($PickUp_rs=mysqli_fetch_assoc($PickUp_query)) ?>
               <?php do { ?>
               <option ><?php echo $address_rs['Name'];?></option>
               <?php } while ($address_rs=mysqli_fetch_assoc($address_query)) ?>
              </select>
		      <button onclick="PcikUpAddressOn()" class="PUButton"><center>Add Address</center></button>
            </div>
            <div id="AddPickUpAddress">
                <center>
                  <div style="width:600px;margin-top:15%;background-color: black;">
	                 <form name=addressField  action="index.php?page=application/AddOns/Change" method="post">
                        <div id="locationField">
                           <input id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
                        </div>
                        <table id="addaddress">
                           <tr> 
                             <td class="wideField" colspan="3"><input class="field" placeholder="Name This Place" name="name" ></input></td>
			               </tr>
                           <tr> 
                             <td class="slimField"><input class="field" id="street_number" name="street_number" disabled="true"></input></td>
                             <td class="wideField" colspan="2"><input class="field" id="route" name="route" disabled="true"></input></td>
                           </tr>
                           <tr>
			                 <td class="slimField"><input class="field" placeholder="Apt" name="AptNumber" ></input></td>
                             <td class="wideField" colspan="2"><input class="field" id="locality" name="locality" disabled="true"></input></td>
                           </tr>
                           <tr>
                              <td class="slimField"><input class="field" id="administrative_area_level_1" disabled="true"></input></td>
                              <td class="wideField"><input class="field" id="postal_code" name="postal_code" disabled="true"></input></td>
                           </tr>
                           <tr>
                              <td class="wideField" colspan="3"><input class="field" id="country" name="country" disabled="true"></input></td>
                           </tr>
                           <tr>
                              <td class="wideField" colspan="3"><textarea class="field" placeholder="Tells Us if theres a Gate Code or anything we need to know" name="Comments" ></textarea></td>
                           </tr>
                        </table>
		                <button class="addnewadderess" onclick="PcikUpAddressOff()">Add A Adderess</button>
	                 </form>
	                 <button class="addnewadderess" onclick="PcikUpAddressOff()">go back</button>
                  </div>
                </center>
            </div>
			<div style="width:30%;float:left;color:green;">
               Drop Off Address:
               <select name="DropOff">
                    <option value="">Select...</option>
                    <?php do { ?>
                    <option ><?php echo $DropOff_rs['Name'];?></option>
                    <?php } while ($DropOff_rs=mysqli_fetch_assoc($DropOff_query)) ?>
                    <?php do { ?>
                    <option ><?php echo $adddress_rs['Name'];?></option>
                    <?php } while ($adddress_rs=mysqli_fetch_assoc($adddress_query)) ?>
			   </select>
			   <button onclick="PcikUpAddressOn()" class="PUButton"><center>Add Address</center></button>
			</div>
	    </div>
</div>
<?php
  include("application/Profiles/AddOns/SCDelivery.php"); 
?>
  