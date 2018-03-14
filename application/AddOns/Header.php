
<header>
  <link href="application/css/navigation.css" rel="stylesheet" type="text/css" />
  <div class="Logopages" >
    <div class="noshow">
  <img  height="100%" width="100%" src="images/PagePics/longlogo.jpg" alt="GreenPedalLogo" />
  </div>
  <headerp>
    <?php
  	include("application/AddOns/navigation.php");
  ?>
  </headerp>
  </div>
</header>
<script>
  function myFunction1(x) {
  x.classList.toggle("change");
  }
  
  function myFunction() {
  document.getElementById("myclickDropdown").classList.toggle("show");
  }

  // Close the clickdropdown menu if the user clicks outside of it
  window.onclick = function(event) {
  if (!event.target.matches('.clickdropbtn')) {

  var clickdropdowns = document.getElementsByClassName("clickdropdown-content");
  var i;
  for (i = 0; i < clickdropdowns.length; i++) {
      var openDropdown = clickdropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}</script>