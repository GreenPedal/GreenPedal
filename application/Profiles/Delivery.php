<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <style>
     
      #map {
        width: 70%;
        height: 30%;
        float:left;
      }
  #mapkey {
     
      color:white;
       background-color:black;
        width: 30%;
        height: 30%;
        float:right;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
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
		  <div style="width:100%;height:40%;">
                  <div id="map"></div>
        </div>
    </div>
 





   <script>
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
  