<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
	<link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />
</head>
 <h1>Make a Delivery</h1>
<div class="buttoncont">
  <div class="uptab">
	 <button class="uptablinks" onclick="openDelivery(event, 'Food')">Restaurants</button>
	 <button class="uptablinks" onclick="openDelivery(event, 'Other')">Custom Delivery</button>
  </div>
</div>

<div id="Food" class="uptabcontent"style="display:block;">
    <h1>Restaurants</h1>
	<h3>Pick a restaurant you want us to delivery to you and order it and we will be at your front door with frest hot food on a bike</h3>
    <div style="width:100%;height:40%;">
       <div id="map"></div>
       <div id="mapkey"></div>
    </div>
</div>



<div id="Other" style="display:none;"class="uptabcontent">
	<h1>Custom</h1>
	<h3>We can deliver anything you want us to.. Just fill this form in and we will get that delivery right to you</h3>
    <center>
	   <div style="width:100%;height:auto;">
	      <form  action="index.php?page=application/Profiles/AddOns/CustomDeliverySure" method="post">
		      <div style="width:45%;float:left;">
                          <div class="form" style="margin:10px;"><h2>Saved PickUp </br> Address:</h2></br>
                             <table id="addaddress">
						      <tr>
                               <td class="wideField" colspan="3"><select class="field" name="PickUp">                           
                                  <option value="">Select...</option>
                                  <?php 
								    do {
								  ?>
                                  <option><?php echo $PickUp_rs['Name']; ?></option>
                                  <?php } while ($PickUp_rs=mysqli_fetch_assoc($PickUp_query)) ?>
                                  <?php 
								     do {
								  ?>
                                  <option ><?php echo $address_rs['Name'];?></option>
                                  <?php } while ($address_rs=mysqli_fetch_assoc($address_query)) ?>
                               </select></td>    
                              </tr>
							 </table>
			              </div>
                          <div class="form">
						      <h2>Add A PickUp Address</h2>
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
			              <div class="form">
                              <table id="addaddress">
				                  <h2>What date and time would you want us to pick it up:
				                  <tr>
					                 <td class="wideField" colspan="3"><input name="Pickdate" class="field" type="date" /></td>
                                  </tr>
				                  <tr>
					                 <td class="wideField" colspan="3"><input name="PickTime" class="field" type="time" /></td>
                                  </tr>
                              </table>
			              </div>
		      </div>
		  <div style="width:10%;height:10px;float:left;color:green;"></div>
		  <div style="width:45%;float:left;color:green;">
                       <div class="form" style="margin:10px;"><h2>Saved DropOff </br> Address:</h2></br>
                         <table id="addaddress">
						  <tr>
                           <td class="wideField" colspan="3"><select class="field" name="DropOff">
                             <option value="">Select...</option>
                             <?php do { ?>
                             <option ><?php echo $DropOff_rs['Name'];?></option>
                             <?php } while ($DropOff_rs=mysqli_fetch_assoc($DropOff_query)) ?>
                             <?php do { ?>
                             <option ><?php echo $adddress_rs['Name'];?></option>
                             <?php } while ($adddress_rs=mysqli_fetch_assoc($adddress_query)) ?>
                           </select></td>    
                          </tr>
						 </table>
					   </div>
	                 <div class="form">
						<h2>Add A DropOff Address</h2>
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
			       <div class="form">
                      <table id="addaddress">
				        <h2>What date and time would you want us to Drop it off:
				        <tr>
					      <td class="wideField" colspan="3"><input name="Dropdate" class="field" type="date" /></td>
                        </tr>
				        <tr>
					      <td class="wideField" colspan="3"><input name="DropTime" class="field" type="time" /></td>
                        </tr>
                      </table>
			       </div>
		  </div>
		  <div style="width:100%;float:right;">
			    <div style="width:55%;">
			         <div class="form" style="margin:0px;">
                         <table id="addaddress">
				           <tr>
			                  <h2>Tell us what we are picking up</h2>
			                  <td class="wideField" colspan="4"><input class="field" name="ItemNumber" placeholder="Item Number:" type="text"></input></td>
				           </tr>
				           <tr>
			                   <td class="wideField" colspan="4"><textarea class="field" name="DecItem" placeholder="Description:" rows="6"></textarea></td>
				           </tr>
                         </table>
	                     <button class="button button-block" type="submit" style="margin-top:10px;font-size:100%;">Send Your deliver</button></td>
			         </div>
			    </div>
		  </div>
       </form>
    </div>
	</center>
</div>


<?php
  include("application/Profiles/AddOns/SCDelivery.php"); 
?>
  