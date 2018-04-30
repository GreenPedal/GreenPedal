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
  function Imageon() {
    document.getElementById("Image").style.display = "block";
}

function Imageff() {
    document.getElementById("Image").style.display = "none";
}
function Addresson() {
    document.getElementById("Address").style.display = "block";
}

function Addresseff() {
    document.getElementById("Address").style.display = "none";
}
function ChangePasswordon() {
    document.getElementById("ChangePassword").style.display = "block";
}

function ChangePasswordoff() {
    document.getElementById("ChangePassword").style.display = "none";
}
function AddAddressPickUpon() {
    document.getElementById("AddAddressPickUp").style.display = "block";
}

function AddAddressPickUpoff() {
    document.getElementById("AddAddressPickUp").style.display = "none";
}
function AddAddressDropOffon() {
    document.getElementById("AddAddressDropOff").style.display = "block";
}

function AddAddressDropOffoff() {
    document.getElementById("AddAddressDropOff").style.display = "none";
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
var placeSearch, autocomplete, DelAddress, AddPicUp, AddDropOff, CAddDropOff;
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
        autocomplete.addListener('place_changed', function() {
        fillInAddress(autocomplete, "");
        });

	  DelAddress = new google.maps.places.Autocomplete(
       /** @type {!HTMLInputElement} */
      (document.getElementById('DelAddress')), {
      types: ['geocode']
      });
       DelAddress.addListener('place_changed', function() {
      fillInAddress(DelAddress, "2");
      });

	   AddPicUp = new google.maps.places.Autocomplete(
       /** @type {!HTMLInputElement} */
      (document.getElementById('AddPicUp')), {
      types: ['geocode']
      });
       AddPicUp.addListener('place_changed', function() {
      fillInAddress(AddPicUp, "3");
      });

	    AddDropOff = new google.maps.places.Autocomplete(
       /** @type {!HTMLInputElement} */
      (document.getElementById('AddDropOff')), {
      types: ['geocode']
      });
       AddDropOff.addListener('place_changed', function() {
      fillInAddress(AddDropOff, "4");
      });
	  CAddDropOff = new google.maps.places.Autocomplete(
       /** @type {!HTMLInputElement} */
      (document.getElementById('CAddDropOff')), {
      types: ['geocode']
      });
       CAddDropOff.addListener('place_changed', function() {
      fillInAddress(CAddDropOff, "5");
      });

	  }
      function fillInAddress(autocomplete, unique) {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
		if (!!document.getElementById(component + unique)) {
          document.getElementById(component + unique).value = '';
          document.getElementById(component + unique).disabled = false;
        }
		 }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
              if (componentForm[addressType] && document.getElementById(addressType + unique)) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType + unique).value = val;
    }
  }
}
google.maps.event.addDomListener(window, "load", initAutocomplete);

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
