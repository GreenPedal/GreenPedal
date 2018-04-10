<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
<div class="form">
    <h1>Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: index.php?page=Login/loginidex" );
    endif;
    ?>
    </p>     
    <a href="index.php?page=Login/loginidex"><button class="button button-block"/>Back to LogIn</button></a>
</div>
</body>
</html>
