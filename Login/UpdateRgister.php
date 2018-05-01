<?php
/* Password reset process, updates database with new user password */
require 'db.php';
session_start();

// Make sure the form is being submitted with method="post"
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    // Make sure the two passwords match
    if ( $_POST['newpassword'] == $_POST['confirmpassword'] ) { 

        $new_password = password_hash($_POST['newpassword'], PASSWORD_BCRYPT);
        $fname = ($_POST['fname']);
		$lname = ($_POST['lname']);
		$phone = ($_POST['phone']);
		$PhoneCarrier = ($_POST['PhoneCarrier']);
	    $email = ($_POST['email']);
		$hash = ($_POST['hash']);

        // We get $_POST['email'] and $_POST['hash'] from the hidden input field of reset.php form
        
        $sql = "UPDATE users SET active='1', first_name='$fname', last_name='$lname', phone='$phone',PhoneCarrier='$PhoneCarrier', password='$new_password', hash='$hash' WHERE email='$email'";

        if ( $mysqli->query($sql) ) {

        $_SESSION['message'] = "You Did It.. Just sign in and get your delivery!";
		        header("location: index.php?page=Login/success");    


        }

    }
    else {
        $_SESSION['message'] = "Two passwords you entered don't match, try again!";
        header("location: index.php?page=Login/error");    
    }

}
?>