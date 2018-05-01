<head>
    <?php require 'application/DBConnect/dbconnect.php'; ?>
    <meta charset="UTF-8">
    <?php include 'css/css.html'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
	<link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />
</head>

<?php 
	$PhoneCarrier_sql="SELECT * FROM phonecarrier";
	$PhoneCarrier_query=mysqli_query($dbconnect, $PhoneCarrier_sql);
	$PhoneCarrier_rs=mysqli_fetch_assoc($PhoneCarrier_query);
session_start();
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
{
    $email = $mysqli->escape_string($_GET['email']); 
    $hash = $mysqli->escape_string($_GET['hash']); 
    
    // Select user with matching email and hash, who hasn't verified their account yet (active = 0)
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND hash='$hash' AND active='0'");

    if ( $result->num_rows == 0 )
    { 
        $_SESSION['message'] = "Account has already been activated or the URL is invalid!";

        header("location: index.php?page=Login/error");
    }
    else {
?>
<style>
* {
  box-sizing: border-box;
}


h1 {
  text-align: center;  
}
select{
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

select.invalid {
  background-color: #ffdddd;
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>

<form id="form" class="form" action="index.php?page=Login/UpdateRgister" method="post">
  <h1>Register:</h1>
  <!-- One "tab" for each step in the form: -->
    <div class="tab">
	<center>
	<greentext>We want to know more about you and what you like to eat.
	</br>Please fill out the information so we can better serve you</greentext>
	</center>
  </div>
  <div class="tab"><greentext>Name:</greentext>
    <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
  </div>
  <div class="tab"><greentext>Contact Info:</greentext>
    <p><input placeholder="Phone Number..." oninput="this.className = ''" name="phone"></p>
	<p><select name="PhoneCarrier">
	    <option value="">Phone Carrier...</option>
        <?php do { ?>
        <option ><?php echo $PhoneCarrier_rs['PhoneCarrierName'];?></option>
        <?php } while ($PhoneCarrier_rs=mysqli_fetch_assoc($PhoneCarrier_query)) ?>
	</select></p>
  </div>
  <div class="tab"><greentext>Make a Password:</greentext>
    <p><input placeholder="Password...." type="password" required name="newpassword" autocomplete="off"/></p>
    <p><input placeholder="Confirm Password...." type="password" required name="confirmpassword" autocomplete="off"/></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;margin-top:10px;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
	  <input type="hidden" name="email" value="<?php echo $email; ?>"> 
	  <input type="hidden" name="hash" value="<?php echo $hash; ?>"> 
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
	<span class="step"></span>
  </div>
</form>

<?php
        
    }
}
else {
    $_SESSION['message'] = "Invalid parameters provided for account verification!";
    header("location: index.php?page=Login/error");
}     
?>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("form").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>