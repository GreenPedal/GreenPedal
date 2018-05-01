<!DOCTYPE html>
<html >
<?php
	if(!isset($_SESSION['ChagnePic'])) {
		$_SESSION['ChagnePic']['Pic']="noimage.jpg";
	} else {
		if($_SESSION['ChagnePic']['Pic']!="noimage.jpg"){
			unlink("images/User/".$_SESSION['ChagnePic']['Pic']);
		}
	}

?>
<head>
    <meta charset="UTF-8">
    <?php include 'css/css.html'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
	<link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />
	<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" >
</head>
<body>
   <div style="width:100%;height:auto;">
      <div style="width:50%;float:left;padding:10px 10px 10px 10px;">
	    <center>
	        <img  width="100%" src="images/User/<?php echo $Image_rs['pic'];?>"</img>
			<button onclick="Imageon()" class="ChangeImage"><center>Change Image</center></button>
			<button onclick="ChangePasswordon()" class="ChangePassword"><center>Change Password</center></button>
		    <button onclick="Addresson()" class="ChangeAddress"><center>Address</center></button>
	 	</center>
	  </div>
      <div class="mainBoxInfo">
             <div class="InfoBox">
                <?php echo $first_name;?>  <?php echo $last_name;?>

             </div>
             <div style="width:100%;color:white;">
                  <?php echo $email;?>
             </div>
			 <div style="width:100%;color:white;margin-top:10px;">
                  <?php echo $Phone_rs['phone'];?>
				  </br><?php echo $Phone_rs['PhoneCarrier'];?>
             </div>

      </div>
   </div>



<div id="Address">
    <div class="form">
	       <h1>Change Or add a address</h1>
      	   <button class="accordion"><h1>Food Delivery Address</h1></button>
		   <div class="panel">
                   <?php do { ?>
		           <h1><?php echo $addresses_rs['Name'];?></h1>
                       <a href="index.php?page=application/Profiles/AddOns/DelAddress&ID=<?php echo $addresses_rs['ID']; ?>">   
				         <div style="float:right;color:red;"><?php echo "Delete" ?></div>
                       </a>
				       <?php echo $addresses_rs['Number'];?>   <?php echo $addresses_rs['Street'];?>   <?php 
					   if ($addresses_rs['AptNumber']) {
                       ?>Apt  <?php echo $addresses_rs['AptNumber']; 
                       }else {
                       } ?>
		           </br><?php echo $addresses_rs['comment']; ?>
				   <?php } while ($addresses_rs=mysqli_fetch_assoc($addresses_query)) ?>
                   <button onclick="on()" class="addnewadderess"><center>Add A New Adderess</center></button>
		   </div>
		   <h1 style="margin-top:10px;">Other Delivery</h1>
           <button class="accordion"><h1>Pick Up Address</h1></button>
		   <div class="panel">
                   <?php do { ?>
		           <h1><?php echo $CPickUp_rs['Name'];?></h1>
                   <a href="index.php?page=application/Profiles/AddOns/CPickUpDel&ID=<?php echo $CPickUp_rs['ID']; ?>">   
				      <div style="float:right;color:red;"><?php echo "Delete" ?></div>
                   </a>
				   <?php echo $CPickUp_rs['Number'];?>   <?php echo $CPickUp_rs['Street'];?>   <?php 
				   if ($CPickUp_rs['AptNumber']) {
                   ?>Apt  <?php echo $CPickUp_rs['AptNumber']; 
                   }else {
                   } ?>
                   </br> <?php echo $CPickUp_rs['comment']; ?>
				   <?php } while ($CPickUp_rs=mysqli_fetch_assoc($CPickUp_query)) ?>
				   <button onclick="AddAddressPickUpon()" class="addnewadderess"><center>Add A New Adderess</center></button>
	       </div>
           <button class="accordion"><h1>Drop Off Address</h1></button>
		   <div class="panel">
              <?php do { ?>
		      <h1><?php echo $CDropOff_rs['Name'];?></h1>
              <a href="index.php?page=application/Profiles/AddOns/DropOffDel&ID=<?php echo $CDropOff_rs['ID']; ?>">   
				         <div style="float:right;color:red;"><?php echo "Delete" ?></div>
              </a>
			  <?php echo $CDropOff_rs['Number'];?>   <?php echo $CDropOff_rs['Street'];?>   <?php 
			  if ($CDropOff_rs['AptNumber']) {
              ?>Apt  <?php echo $CDropOff_rs['AptNumber']; 
              }else {
              } ?>
		      </br> <?php echo $CDropOff_rs['comment']; ?>
	          <?php } while ($CDropOff_rs=mysqli_fetch_assoc($CDropOff_query)) ?>
			  <button onclick="AddAddressDropOffon()" class="addnewadderess"><center>Add A New Adderess</center></button>
           </div>
           <button class="button button-block"  style="margin-top:10px;" onclick="Addresseff()"><center>go back</center></button>
	</div>
</div>

<div id="Image">
  <center>
    <div class="form">
	<h1>Change Your Profile Image</h1>
        <form method="post" action="index.php?page=application/Profiles/AddOns/ChangeImage" enctype="multipart/form-data" >
         <input type="file" name="fileToUpload" id="fileToUpload" /> </input> 
         <button style="margin-top:10px;" type="submit" class="button button-block" name="submit"  onclick="Imageff()"><center>Chnage Your Image</center></button>
        </form>
        <button style="margin-top:10px;" class="button button-block" onclick="Imageff()"><center>go back</center></button>
    </div> 
  </center>
</div>


<div id="ChangePassword">
  <?php
   include("application/Profiles/AddOns/ChangePassword.php")
  ?>
</div>


<div id="overlay">
      <center>
	      <div class="form">
		    <h1>Add an address that we can deliver your food odder to</h1>
	        <form name=addressField  action="index.php?page=application/Profiles/AddOns/InsertIntoAddress" method="post">
               <div id="locationField">
                 <input id="DelAddress" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
               </div>
               <table id="addaddress">
                  <tr> 
                     <td class="wideField" colspan="3"><input class="field" placeholder="Name This Place" name="name2" ></input></td>
			      </tr>
                  <tr> 
                     <td class="slimField"><input class="field" id="street_number2" name="street_number2" disabled="true"></input></td>
                     <td class="wideField" colspan="2"><input class="field" id="route2" name="route2" disabled="true"></input></td>
                  </tr>
                  <tr>
			          <td class="slimField"><input class="field" placeholder="Apt" name="AptNumber2" ></input></td>
                      <td class="wideField" colspan="2"><input class="field" id="locality2" name="locality2" disabled="true"></input></td>
                  </tr>
                  <tr>
                    <td class="slimField"><input class="field" id="administrative_area_level_12" disabled="true"></input></td>
                    <td class="wideField"><input class="field" id="postal_code2" name="postal_code2" disabled="true"></input></td>
                  </tr>
                  <tr>
                    <td class="wideField" colspan="3"><input class="field" id="country2" name="country2" disabled="true"></input></td>
                  </tr>
                  <tr>
                    <td class="wideField" colspan="3"><textarea class="field" placeholder="Tells Us if theres a Gate Code or anything we need to know" name="Comments2" ></textarea></td>
                  </tr>
               </table>
		       <button class="button button-block"  style="margin-top:10px;"  onclick="off()">Add A Adderess</button>
	        </form>
	        <button class="button button-block"  style="margin-top:10px;"  onclick="off()">go back</button>
         </div>
      </center>
</div>
<div id="AddAddressPickUp">
      <center>
	      <div class="form">
		    <h1>Add an address where we can Pick up from</h1>
	        <form name=addressField  action="index.php?page=application/Profiles/AddOns/ChInsertIntoPickUp" method="post">
               <div id="locationField">
                 <input id="AddPicUp" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
               </div>
               <table id="addaddress">
                  <tr> 
                     <td class="wideField" colspan="3"><input class="field" placeholder="Name This Place" name="name3" ></input></td>
			      </tr>
                  <tr> 
                     <td class="slimField"><input class="field" id="street_number3" name="street_number3" disabled="true"></input></td>
                     <td class="wideField" colspan="2"><input class="field" id="route3" name="route3" disabled="true"></input></td>
                  </tr>
                  <tr>
			          <td class="slimField"><input class="field" placeholder="Apt" name="AptNumber3" ></input></td>
                      <td class="wideField" colspan="2"><input class="field" id="locality3" name="locality3" disabled="true"></input></td>
                  </tr>
                  <tr>
                    <td class="slimField"><input class="field" id="administrative_area_level_13" disabled="true"></input></td>
                    <td class="wideField"><input class="field" id="postal_code3" name="postal_code3" disabled="true"></input></td>
                  </tr>
                  <tr>
                    <td class="wideField" colspan="3"><input class="field" id="country3" name="country3" disabled="true"></input></td>
                  </tr>
                  <tr>
                    <td class="wideField" colspan="3"><textarea class="field" placeholder="Tells Us if theres a Gate Code or anything we need to know" name="Comments3" ></textarea></td>
                  </tr>
               </table>
		       <button class="button button-block"  style="margin-top:10px;"  onclick="AddAddressPickUpoff()">Add A Adderess</button>
	        </form>
	        <button class="button button-block"  style="margin-top:10px;"  onclick="AddAddressPickUpoff()">go back</button>
         </div>
      </center>
</div>
<div id="AddAddressDropOff">
      <center>
	      <div class="form">
		    <h1>Add an address where we can Drop Off to</h1>
	        <form name=addressField  action="index.php?page=application/Profiles/AddOns/ChInsertIntoDropOff" method="post">
               <div id="locationField">
                 <input id="AddDropOff" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
               </div>
               <table id="addaddress">
                  <tr> 
                     <td class="wideField" colspan="3"><input class="field" placeholder="Name This Place" name="name4" ></input></td>
			      </tr>
                  <tr> 
                     <td class="slimField"><input class="field" id="street_number4" name="street_number4" disabled="true"></input></td>
                     <td class="wideField" colspan="2"><input class="field" id="route4" name="route4" disabled="true"></input></td>
                  </tr>
                  <tr>
			          <td class="slimField"><input class="field" placeholder="Apt" name="AptNumber4" ></input></td>
                      <td class="wideField" colspan="2"><input class="field" id="locality4" name="locality4" disabled="true"></input></td>
                  </tr>
                  <tr>
                    <td class="slimField"><input class="field" id="administrative_area_level_14" disabled="true"></input></td>
                    <td class="wideField"><input class="field" id="postal_code4" name="postal_code4" disabled="true"></input></td>
                  </tr>
                  <tr>
                    <td class="wideField" colspan="3"><input class="field" id="country4" name="country4" disabled="true"></input></td>
                  </tr>
                  <tr>
                    <td class="wideField" colspan="3"><textarea class="field" placeholder="Tells Us if theres a Gate Code or anything we need to know" name="Comments4" ></textarea></td>
                  </tr>
               </table>
		       <button class="button button-block"  style="margin-top:10px;" onclick="AddAddressDropOffoff()">Add A Adderess</button>
	        </form>
	        <button class="button button-block"  style="margin-top:10px;" onclick="AddAddressDropOffoff()">go back</button>
         </div>
      </center>
</div>





      <?php
	  include("application/Profiles/AddOns/SCChange.php");
	 ?>

</body>
