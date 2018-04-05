<!DOCTYPE html>
<html>
  <head>
    <link href="application/css/Login.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
	<?php
        include("application/AddOns/Header.php");
    ?>
  </head>
<body>
<div class="Box">
   <center>
      <div class="GreenBox">
	     <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'login')">Log In</button>
            <button class="tablinks" onclick="openCity(event, 'join')">Join Us</button>
            <button class="tablinks" onclick="openCity(event, 'Business')">Business Log In</button>
         </div>
	     <div id="login" class="tabcontent">
           <h3>Please Log In</h3>
         </div>
         <div id="join" class="tabcontent">
           <h3>Join Us for free</h3>
         </div>
         <div id="Business" class="tabcontent">
           <h3>Business Log In</h3>
         </div>
      </div>
   </center>
</div>
<script>
function openCity(evt, Login) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(Login).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>
</html>