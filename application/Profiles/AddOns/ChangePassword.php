<?php
/* The password reset form, the link to this page is included
   from the forgot.php email message
*/
	include("application/DBConnect/dbconnect.php");
session_start();
  $hash = $_SESSION['hash'];
  $UserID = $_SESSION['ID'];
  $email = $_SESSION['email'];
    // Make sure user email with matching hash exist
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <?php include 'css/css.html'; ?>
</head>

<body>
    <div class="form">

          <h1>Choose Your New Password</h1>
          
          <form action="index.php?page=Login/reset_password" method="post">
              
          <div class="field-wrap">
            <div style="color:green">New Password<span>*</span></div>
            <input type="password"required name="newpassword" autocomplete="off"/>
          </div>
              
          <div class="field-wrap">
            <div style="color:green">Confirm New Password<span>*</span></div>
            <input type="password"required name="confirmpassword" autocomplete="off"/>
          </div>
          
          <!-- This input field is needed, to get the email of the user -->
          <input type="hidden" name="email" value="<?= $email ?>">    
          <input type="hidden" name="hash" value="<?= $hash ?>">    
              
          <button class="button button-block"/>Apply</button>
          
          </form>

    </div>

</body>
</html>
