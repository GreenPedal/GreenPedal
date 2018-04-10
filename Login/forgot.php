<?php 
/* Reset your password form, sends reset.php password link */
require 'db.php';
include("application/Email/Mail.php");

session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    { 
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: index.php?page=Login/error");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data
        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
        . " for a confirmation link to complete your password reset!</p>";

        // Send registration confirmation link (reset.php)
        $subject = 'Password Reset';
        $message_body = '
        Hello '.$first_name.',

        You have requested password reset!

        Please click this link to reset your password:

        https://greenpedal831.com/Login/reset.php?email='.$email.'&hash='.$hash; 
		
        $con->addAddress($email);
        $con->Subject = $subject;
        $con->AltBody = $message_body;
        $con->Body = $message_body;

		$con->send();


		
        header("https://greenpedal831.com/Login/success.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'css/css.html'; ?>
</head>

<body>
    
  <div class="form">

    <h1>Reset Your Password</h1>

    <form action="index.php?page=Login/forgot" method="post">
     <div class="field-wrap">
            <div style="color:green">Email Address<span>*</span></div>
      <input type="email"required autocomplete="off" name="email"/>
    </div>
    <button class="button button-block"/>Reset</button> 
    </form>
  </div>
 </body>

</html>
