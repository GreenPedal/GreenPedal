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
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
	<link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />
	<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" >
  </head>
<body>
   <div style="width:100%;height:auto;">
      <div style="width:50%;float:left;padding:10px 100px 10px 10px;">
	    <center>
	        <img  width="100%" src="images/User/<?php echo $Image_rs['pic'];?>"</img>
			<button onclick="Imageon()" class="ChangeImage"><center>Change Image</center></button>
			<a href="index.php?page=application/Profiles/AddOns/ChangePassword">
			  <button class="ChangeImage"><center>Change Password</center></button>
			</a>
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
      </div>
   </div>



<div id="Address">
   <div style="width:30%;height:auto;margin-top:0px; float:right;">
       <greentext>Food Delivery Address</greentext>
       <?php do { ?>
	   <div class="adderessBox">
		   <button class="accordion">
		           <div style="color:white;"><?php echo $addresses_rs['Name'];?></div>
			       <div style="float:right;width:30%;text-align:right;">
                       <a href="index.php?page=application/Profiles/AddOns/DelAddress&ID=<?php echo $addresses_rs['ID']; ?>">   
				         <div style="color:red;"><?php echo "Delete" ?></div>
                       </a>
				   </div>
                   <div style="width:100%;text-align:left;padding:3px;">
				         <?php echo $addresses_rs['Number'];?>   <?php echo $addresses_rs['Street'];?>   <?php 
					     if ($addresses_rs['AptNumber']) {
                         ?>Apt  <?php echo $addresses_rs['AptNumber']; 
                         }else {
                         } ?>
                   </div>
		   </button>
		   <div class="panel">
		        <?php echo $addresses_rs['comment']; ?>
	       </div>
	   </div>
       <?php } while ($addresses_rs=mysqli_fetch_assoc($addresses_query)) ?>
       <button onclick="on()" class="addnewadderess"><center>Add A New Adderess</center></button>
   </div>

   <div style="width:30%;height:auto;margin-top:30px; float:right;color:green;">
       <greentext>Pick Up Address</greentext>
       <?php do { ?>
	   <div class="adderessBox">
		   <button class="accordion">
		           <div style="color:white;"><?php echo $CPickUp_rs['Name'];?></div>
			       <div style="float:right;width:30%;text-align:right;">
                       <a href="index.php?page=application/Profiles/AddOns/CPickUpDel&ID=<?php echo $CPickUp_rs['ID']; ?>">   
				         <div style="color:red;"><?php echo "Delete" ?></div>
                       </a>
				   </div>
                   <div style="width:100%;text-align:left;padding:3px;">
				         <?php echo $CPickUp_rs['Number'];?>   <?php echo $CPickUp_rs['Street'];?>   <?php 
					     if ($CPickUp_rs['AptNumber']) {
                         ?>Apt  <?php echo $CPickUp_rs['AptNumber']; 
                         }else {
                         } ?>
                   </div>
		   </button>
		   <div class="panel">
		        <?php echo $CPickUp_rs['comment']; ?>
	       </div>
	   </div>
	   <?php } while ($addresses_rs=mysqli_fetch_assoc($addresses_query)) ?>
   </div>
   <div style="width:30%;height:auto;margin-top:0px; float:right;">
       <greentext>Drop Off Address</greentext>
       <?php do { ?>
	   <div class="adderessBox">
		   <button class="accordion">
		           <div style="color:white;"><?php echo $CDropOff_rs['Name'];?></div>
			       <div style="float:right;width:30%;text-align:right;">
                       <a href="index.php?page=application/Profiles/AddOns/DropOffDel&ID=<?php echo $CDropOff_rs['ID']; ?>">   
				         <div style="color:red;"><?php echo "Delete" ?></div>
                       </a>
				   </div>
                   <div style="width:100%;text-align:left;padding:3px;">
				         <?php echo $CDropOff_rs['Number'];?>   <?php echo $CDropOff_rs['Street'];?>   <?php 
					     if ($CDropOff_rs['AptNumber']) {
                         ?>Apt  <?php echo $CDropOff_rs['AptNumber']; 
                         }else {
                         } ?>
                   </div>
		   </button>
		   <div class="panel">
		        <?php echo $CDropOff_rs['comment']; ?>
	       </div>
	   </div>
	   <?php } while ($CDropOff_rs=mysqli_fetch_assoc($CDropOff_query)) ?>
   </div>
</div>

<div id="Image">
  <center>
    <div style="margin-top:20%;width:30%;height:auto;background-color:black;">
	<div style="color:green;font-size:45px;">Change Your Profile Image</div>
        <form method="post" action="index.php?page=application/Profiles/AddOns/ChangeImage" enctype="multipart/form-data" >
         <input type="file" name="fileToUpload" id="fileToUpload" /> </input> 
         <button type="submit" name="submit" class="addnewadderess" onclick="Imageff()"><center>Chnage Your Pic</center></button>
        </form>
        <button class="addnewadderess" onclick="Imageff()"><center>go back</center></button>
    </div> 
  </center>
</div>


 <div id="overlay">
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
		       <button class="addnewadderess" onclick="off()">Add A Adderess</button>
	        </form>
	        <button class="addnewadderess" onclick="off()">go back</button>
         </div>
      </center>
 </div>
      <?php
	  include("application/Profiles/AddOns/SCChange.php");
	 ?>

</body>
