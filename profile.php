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
		<a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
      </div>   
	</center>
	<div class="buttonright">
	<p>
<div sytle="float:left">
Your saved adderess

<select name="adderess">

  <option value="">Select...</option>

  <option value="M">Male</option>

  <option value="F">Female</option>

</select>
</div>
</p>

    </div>
    <p>
      <?php 
         // Display message about account verification link only once
         if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
          
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div>';
          }
          
          ?>
    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
