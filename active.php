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
	$promis = $_SESSION['promis'];
	$admin = $_SESSION['admin'];

}
?>
<!DOCTYPE html>
<html>
<body>
<?php

if ($active) {
        header("location: test2.php");
    }else {
   echo "Please check your email to active your account";
}

?>
</body>
</html>