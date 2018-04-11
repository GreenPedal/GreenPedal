<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
	$pic = $_SESSION['pic'];

}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
</head>

<body>
  <div class="proform">
    <center>
      <div class="WalcomName">
		<img  width="100%" src="images/User/<?php echo $pic; ?>"</img>
		<h3>Welcome <?php echo $first_name.' '.$last_name; ?></h3> 
	    <div class="sidetab">
          <button class="tablinks" onclick="openCity(event, 'Dash')" id="defaultOpen">Dash Board</button>
          <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
          <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
		  <a href="index.php?page=Login/logout"><button style="border:3px solid red;" class="tablinks" >LogOut</button><a>
        </div>
      </div>
	</center>
  </div>

  <div class="mainBox">
      <div id="Dash" class="sidetabcontent">
          <h3>Dash Board</h3>
          <p>London is the capital city of England.</p>
        </div>
        <div id="Paris" class="sidetabcontent">
          <h3>Paris</h3>
          <p>Paris is the capital of France.</p> 
        </div>
        <div id="Tokyo" class="sidetabcontent">
          <h3>Tokyo</h3>
          <p>Tokyo is the capital of Japan.</p>
        </div>
		</div>
  <script>
  function openCity(evt, cityName) {
    var i, sidetabcontent, tablinks;
    sidetabcontent = document.getElementsByClassName("sidetabcontent");
    for (i = 0; i < sidetabcontent.length; i++) {
        sidetabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  document.getElementById("defaultOpen").click();
</script>
      </div>   
	</center>
	<div class="buttonright">
	<p>
</p>
</body>
</html>

