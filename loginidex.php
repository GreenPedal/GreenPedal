<?php 
/* Main page with two forms: sign up and log in */
	include("application/DBConnect/dbconnect.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <?php  
     include 'css/css.html'; 
   ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab" onclick="openCity(event, 'signup')"><a href="#signup">Sign Up</a></li>
        <li class="tab" onclick="openCity(event, 'login')" ><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login" class="tabcontent">   
          <h1>Welcome Back!</h1>
          
          <form action="loginidex.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <div style="color:green">Email<span>*</span></div>
            <input type="email" required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <div style="color:green">Password<span>*</span></div>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
        <div id="signup" class="tabcontent">   
          <h1>Sign Up for Free</h1>
          
          <form action="loginidex.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
            <div style="color:green">Frist Name<span>*</span></div>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
            <div style="color:green">Last Name<span>*</span></div>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <div style="color:green">Email Address<span>*</span></div>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            
            <div style="color:green">Set A Password<span>*</span></div>
            
            <input type="password"required autocomplete="off" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Register</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tab;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tab = document.getElementsByClassName("tab");
    for (i = 0; i < tab.length; i++) {
        tab[i].className = tab[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>
</html>
