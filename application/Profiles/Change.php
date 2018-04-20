<!DOCTYPE html>
<html >
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
	<link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />
	<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" >
  </head>
<body>
   <div style="width:100%;height:auto;">
      <div style="width:50%;float:left;padding:10px 100px 10px 10px;">
	    <center>
	        <img  width="100%" src="images/User/<?php echo $pic; ?>"</img>
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

  <div style="width:100%;height:auto;margin-top:40%;">
   
   <div style="width:30%;height:auto;margin-top:0px; float:right;">
       <greentext>Food Delivery Address</greentext>
       <?php do { ?>
	   <div class="adderessBox">
		   <button class="accordion">
		           <div style="color:white;"><?php echo $addresses_rs['Name'];?></div>
			       <div style="float:right;width:30%;text-align:right;">
                       <a href="index.php?page=application/AddOns/DelAddress&ID=<?php echo $addresses_rs['ID']; ?>">   
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
   <div style="width:30%;height:auto;margin-top:0px; float:right;">
       <greentext>Pick Up Address</greentext>
       <?php do { ?>
	   <div class="adderessBox">
		   <button class="accordion">
		           <div style="color:white;"><?php echo $CPickUp_rs['Name'];?></div>
			       <div style="float:right;width:30%;text-align:right;">
                       <a href="index.php?page=application/AddOns/DelAddress&ID=<?php echo $CPickUp_rs['ID']; ?>">   
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
                       <a href="index.php?page=application/AddOns/DelAddress&ID=<?php echo $CDropOff_rs['ID']; ?>">   
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





 <div id="overlay">
      <center>
         <div style="width:600px;margin-top:15%;background-color: black;">
	        <form name=addressField  action="index.php?page=application/AddOns/Change" method="post">
               <div id="locationField">
                 <input id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
               </div>
               <table id="address">
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
</body>
  <script>
  function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}

  function Dropon() {
    document.getElementById("DropOff").style.display = "block";
}

function dropoff() {
    document.getElementById("DropOff").style.display = "none";
}


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
var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxBVM90e_RICT4pWJI_paz7tkVAe4dp0o&libraries=places&callback=initAutocomplete"
        async defer>
    </script>