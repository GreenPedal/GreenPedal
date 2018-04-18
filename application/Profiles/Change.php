<!DOCTYPE html>
<html >
  <style>

  .mainBoxInfo{
  width:50%;
  float:left;
  padding:40;
  margin-top:10%;
  
  }
  .adderesstext{
  	  color:green;
	  margin-top:5%;
	  width:100%;
  }
  .adderessBox{
  float:left;
  width:50%;
  padding:20px;
  }
  .InfoBox{
  font-size:30px;
  width:100%;
  color:white;
  }
  greentext{
  color:green;
  }
  .accordion {
    background-color: black;
    color: green;
    cursor: pointer;
    padding: 18px;
    width: 100%;
	height:10%;
    border: 1px sold white;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
  }
  .addnewadderess {
    background-color: black;
    padding:20px;
    color: green;
    cursor: pointer;
    padding: 18px;
    width: 100%;
	height:6%;
    border: 1px sold white;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
  }
  .active, .addnewadderess:hover {
    background-color: green; 
	color:white;
  }



  .active, .accordion:hover {
    background-color: green; 
	color:white;
  }

  .panel {
    padding: 8px 18px;
    display: none;
    background-color: black;
	color:green;
    overflow: hidden;
	font-size:20px;
  }
  #overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.5);
    z-index: 2;
    cursor: pointer;
}

#text{
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 50px;
    color: black;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
}
 #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
	#locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
		height:25px;
        width: 99%;
		background-color:black;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: white;
      }
      #address {
        border: 1px solid ;
        background-color: black;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
	  #changePic {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.5);
    z-index: 2;
    cursor: pointer;
}
    </style>
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
   <div style="width:100%;height:auto;margin-top:100px;">
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
   <div id="overlay">
      <center>
         <div style="width:480px;margin-top:15%;">
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
                    <td class="wideField" colspan="3"><input class="field" placeholder="Tells Us if theres a Gate Code or anything we need to know" name="Comments" ></input></td>
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