<script>
function PcikUpAddressOn() {
    document.getElementById("AddPickUpAddress").style.display = "block";
}

function PcikUpAddressOff() {
    document.getElementById("AddPickUpAddress").style.display = "none";
}
function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}






var customLabel = {
        Pizza: {
          label: 'P'
        },
        bar: {
          label: 'B'
        }
      };



        function initMap() {
         var center =  new google.maps.LatLng(36.600238, -121.894676);
        var map = new google.maps.Map(document.getElementById('map'), {
          center: center,
          zoom: 12
        });

       
        var infoWindow = new google.maps.InfoWindow;


        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('You are here');
            infoWindow.open(map);
            map.setCenter(pos);
        });
        }

           // Change this depending on the name of your PHP or XML file
             downloadUrl('https://greenpedal831.com/markers.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var Bus_ID = markerElem.getAttribute('Bus_ID');
              var name = markerElem.getAttribute('name');
              var motto = markerElem.getAttribute('motto');
              var address = markerElem.getAttribute('address');
              var logo = markerElem.getAttribute('logo');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));


          

              var infowincontent = document.createElement('div');
             
              
              var imglogo = document.createElement('img');
              imglogo.src = "images/BusinessesPics/"+logo;
              imglogo.width = 75;
              imglogo.style.cssFloat = "left";
              imglogo.style.margin = "5px";
              infowincontent.appendChild(imglogo);
            
              
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var textadd = document.createElement('textadd');
              textadd.textContent = motto
              infowincontent.appendChild(textadd);
              infowincontent.appendChild(document.createElement('br'));


              



              var textadd = document.createElement('textadd');
              textadd.textContent = address
              infowincontent.appendChild(textadd);
             
                
              document.getElementById('mapkey').appendChild(infowincontent);

              
             var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });

              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }


      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxBVM90e_RICT4pWJI_paz7tkVAe4dp0o&callback=initMap">
    </script>
	    <script>

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
