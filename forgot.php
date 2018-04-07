<?php 
/* Reset your password form, sends reset.php password link */
require 'db.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    { 
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)
	date_default_timezone_set('Etc/UTC');
 
require 'application/PHPMailer/phpmailer/phpmailer/PHPMailerAutoload.php';
 
$from = new PHPMailer();
$from->isSMTP();
$from->SMTPDebug   = 2;
$from->DKIM_domain = '160.153.36.2';
$from->Debugoutput = 'html';
$from->Host        = "p3plcpnl0734.prod.phx3.secureserver.net";
$from->Port        = 465;
$from->Username    = "delivery@greenpedal831.com";
$from->Password    = "Gr33nPedal";
$from->setFrom('delivery@greenpedal831.com', 'Your Delivery');
$from->SMTPAuth    = true;
$from->SMTPSecure  = 'ssl';

        $user = $result->fetch_assoc(); // $user becomes array with user data
        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
        . " for a confirmation link to complete your password reset!</p>";

        // Send registration confirmation link (reset.php)
        $to      = $email;
        $subject = 'Password Reset';
        $message_body = '
        Hello '.$first_name.',

        You have requested password reset!

        Please click this link to reset your password:

        http://localhost/login-system/reset.php?email='.$email.'&hash='.$hash; 
		
		

        mail($from, $to, $subject, $message_body);
		
        header("location: success.php");
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

    <form action="forgot.php" method="post">
     <div class="field-wrap">
      <label>
        Email Address<span class="req">*</span>
      </label>
      <input type="email"required autocomplete="off" name="email"/>
    </div>
    <button class="button button-block"/>Reset</button>
    </form>
  </div>
          
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>

</html>
