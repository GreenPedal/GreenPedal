<?php
 session_start();
 if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
 }
 else {
    $UserID = $_SESSION['ID'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
	$pic = $_SESSION['pic'];
    $promis = $_SESSION['promis'];
	$admin = $_SESSION['admin'];
    $Businesses_sql="SELECT * FROM businesses";
	$Businesses_query=mysqli_query($dbconnect, $Businesses_sql);
	$Businesses_rs=mysqli_fetch_assoc($Businesses_query);
    $addresses_sql="SELECT * FROM address WHERE User_ID='$UserID'";
	$addresses_query=mysqli_query($dbconnect, $addresses_sql);
	$addresses_rs=mysqli_fetch_assoc($addresses_query);
 }
?>
<!DOCTYPE html>
<html >
 <head>
	<link href="application/css/Businesses.css" rel="stylesheet" type="text/css" />
	<link href="application/css/Phone/Businesses.css" rel="stylesheet" type="text/css" />
    <meta charset="UTF-8">
    <title>Welcome <?= $first_name.' '.$last_name ?></title>
    <?php
      include 'css/css.html'; 
    ?>
 </head>
 <body>
  <div class="proform">
   <center>
    <div class="WalcomName">
	 <img  width="100%" src="images/User/<?php echo $pic; ?>"</img>
	 <h3>Stay Green <?php echo $first_name.' '.$last_name; ?></h3> 
	 <div class="sidetab">
	   <?php
         if ($promis) {
       ?> 
       <button class="tablinks" onclick="openCity(event, 'Dash')" id="defaultOpen">promis</button>
	   <?php
          } elseif($admin) {
	   ?> 
	   <button class="tablinks" onclick="openCity(event, 'AdminDash')" id="defaultOpen">AdminDashBoard</button>
	   <button class="tablinks" onclick="openCity(event, 'WebSite')">ChangeWebSite</button>
	   <button class="tablinks" onclick="openCity(event, 'Dispatch')">Dispatch</button>
	   <button class="tablinks" onclick="openCity(event, 'Add')">Add Something</button>
	   <?php
          }else {
	   ?> 
       <button class="tablinks" onclick="openCity(event, 'Dash')" id="defaultOpen">nothing</button>
	   <?php
          }
	   ?> 
	   <button class="tablinks" onclick="openCity(event, 'Chagne')">Change Profile</button>
	   <button class="tablinks" onclick="openCity(event, 'Delivery')">Delivery</button>
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
   <div id="AdminDash" class="sidetabcontent">
    <h3>Admin DashBoard</h3>
    <p>This is where we see what the company is doing</p>
   </div>
   <div id="Delivery" class="sidetabcontent">
     <?php
	  include("application/Profiles/Delivery.php")
	 ?>
   </div>
   <div id="WebSite" class="sidetabcontent">
     <?php
	  include("application/BackPages/cpanel.php")
	 ?>
   </div>
   <div id="Chagne" class="sidetabcontent">
     <?php
	  include("application/Profiles/Change.php")
	 ?>
   </div>
   <div id="Dispatch" class="sidetabcontent">
    <h3>Dispatch</h3>
    <p>this is where we will Dispatch jobs to people</p> 
   </div>
   <div id="Add" class="sidetabcontent">
     <h3>Add Something</h3>
     <p>this is where we will add a emoly a resturant</p> 
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

    function openDelivery(evt, Delivery) {
    var i, uptabcontent, uptablinks;
    uptabcontent = document.getElementsByClassName("uptabcontent");
    for (i = 0; i < uptabcontent.length; i++) {
        uptabcontent[i].style.display = "none";
    }
    uptablinks = document.getElementsByClassName("uptablinks");
    for (i = 0; i < uptablinks.length; i++) {
        uptablinks[i].className = uptablinks[i].className.replace(" active", "");
    }
    document.getElementById(Delivery).style.display = "block";
    evt.currentTarget.className += " active";
  }
  document.getElementById("defaultOpen").click();

</script>
 </body>

</html>

