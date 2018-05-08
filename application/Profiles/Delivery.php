<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
	<link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />
</head>
 <h3>Make a Delivery</h3>
 <p>You can choose between a resturant you want to oder form or a custom delivery where you pick something up and delivery it where ever you want us to</p>
<div class="buttoncont">
  <div class="uptab">
	 <button class="uptablinks" onclick="openDelivery(event, 'Food')">Food Delivery</button>
	 <button class="uptablinks" onclick="openDelivery(event, 'Other')">Custom Delivery</button>
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
	<h3>Custom</h3>
	<div style="width:100%;height:auto;">
		<form  action="index.php?page=application/Profiles/AddOns/CustomDeliverySure" method="post">
		  <div style="width:40%;float:left;color:green;">
			<center>
              <div style="margin-top:20px;">Saved pick up address:
              <select name="PickUp">
               <option value="">Select...</option>
               <?php do { ?>
               <option ><?php echo $PickUp_rs['Name'];?></option>
               <?php } while ($PickUp_rs=mysqli_fetch_assoc($PickUp_query)) ?>
               <?php do { ?>
               <option ><?php echo $address_rs['Name'];?></option>
               <?php } while ($address_rs=mysqli_fetch_assoc($address_query)) ?>
              </select></div>
              <center>
	              <div class="form">
                        <table id="addaddress">
						   <tr>
                             <td class="wideField" colspan="3"><input class="field"  id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text"></input></td>
                           </tr>
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
                              <td class="slimField"><input class="field" id="administrative_area_level_1" name="State" disabled="true"></input></td>
                              <td class="wideField"><input class="field" id="postal_code" name="postal_code" disabled="true"></input></td>
                           </tr>
                           <tr>
                              <td class="wideField" colspan="3"><input class="field" id="country" name="country" disabled="true"></input></td>
                           </tr>
                           <tr>
                              <td class="wideField" colspan="3"><textarea class="field" placeholder="Tells Us if theres a Gate Code or anything we need to know" name="Comments" ></textarea></td>
                           </tr>
                        </table>
                  </div>
              </center>
			  <div style="margin-top:20px;"><p>Who are we Picking it from:<input name="PickPerson" ype="text" style="height:10%;"></input></p></div>
            </center>
		  </div>
		  <div style="width:20%;height:10px;float:left;color:green;"></div>
		  <div style="width:40%;float:left;color:green;">
                   <center>
                       <div style="margin-top:20px;">Saved drop off address:
                           <select name="DropOff">
                             <option value="">Select...</option>
                             <?php do { ?>
                             <option ><?php echo $DropOff_rs['Name'];?></option>
                             <?php } while ($DropOff_rs=mysqli_fetch_assoc($DropOff_query)) ?>
                             <?php do { ?>
                             <option ><?php echo $adddress_rs['Name'];?></option>
                             <?php } while ($adddress_rs=mysqli_fetch_assoc($adddress_query)) ?>
			               </select>
					   </div>
                   </center>
                   <center>
	                 <div class="form">
                        <table id="addaddress">
                           <tr> 
                             <td class="wideField" colspan="2"><input class="field" id="CAddDropOff" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
                           </tr> 
						   <tr> 
                             <td class="wideField" colspan="3"><input class="field" placeholder="Name This Place" name="name5" ></input></td>
			               </tr>
                           <tr> 
                             <td class="slimField"><input class="field" id="street_number5" name="street_number5" disabled="true"></input></td>
                             <td class="wideField" colspan="2"><input class="field" id="route5" name="route5" disabled="true"></input></td>
                           </tr>
                           <tr>
			                 <td class="slimField"><input class="field" placeholder="Apt" name="AptNumber5" ></input></td>
                             <td class="wideField" colspan="2"><input class="field" id="locality5" name="locality5" disabled="true"></input></td>
                           </tr>
                           <tr>
                              <td class="slimField"><input class="field" id="administrative_area_level_15" name="State5" disabled="true"></input></td>
                              <td class="wideField"><input class="field" id="postal_code5" name="postal_code5" disabled="true"></input></td>
                           </tr>
                           <tr>
                              <td class="wideField" colspan="3"><input class="field" id="country5" name="country5" disabled="true"></input></td>
                           </tr>
                           <tr>
                              <td class="wideField" colspan="3"><textarea class="field" placeholder="Tells Us if theres a Gate Code or anything we need to know" name="Comments5" ></textarea></td>
                           </tr>
                        </table>
                     </div>
			         <div style="margin-top:20px;"><p>Who are we dropping off to:<input name="DropPerson" type="text" style="height:10%;"></input></p></div>
                   </center>
		  </div>
		  <div style="width:100%;height:auto;">
		    <center>
			  <p>Tell us what we are picking up</p>
			  <div style="width:60%;"><input name="ItemNumber" placeholder="Item Number:" type="text" style="height:5%;"></input></div>
			  <div style="width:60%;"><textarea name="DecItem" placeholder="Description:" rows="6"></textarea></div>
	          <div style="width:60%;"><button  class="button button-block" type="submit" style="margin-top:10px;font-size:100%;">Send Your deliver</button></div>
		    </center>
		  </div>
        </form>
    </div>
</div>


<?php
  include("application/Profiles/AddOns/SCDelivery.php"); 
?>
  