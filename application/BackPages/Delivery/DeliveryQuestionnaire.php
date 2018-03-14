<?php
	session_start();
	if(!isset($_SESSION['DeliveryQuestionnaire'])) {
      		$_SESSION['DeliveryQuestionnaire']['email']="";
		$_SESSION['DeliveryQuestionnaire']['Pname']="";
    	$_SESSION['DeliveryQuestionnaire']['Pnumber']="";
		$_SESSION['DeliveryQuestionnaire']['Pdate']="";
    		$_SESSION['DeliveryQuestionnaire']['Ptime']="";
    	$_SESSION['DeliveryQuestionnaire']['PStreet']="";
		$_SESSION['DeliveryQuestionnaire']['PaddNumber']="";
    	$_SESSION['DeliveryQuestionnaire']['Pzip']="";
		$_SESSION['DeliveryQuestionnaire']['Plastname']="";
    $_SESSION['DeliveryQuestionnaire']['Pcomments']="";
    
    	$_SESSION['DeliveryQuestionnaire']['Dname']="";
    	$_SESSION['DeliveryQuestionnaire']['Dnumber']="";
      		$_SESSION['DeliveryQuestionnaire']['Ddate']="";
		$_SESSION['DeliveryQuestionnaire']['Dtime']="";
    	$_SESSION['DeliveryQuestionnaire']['DStreet']="";
		$_SESSION['DeliveryQuestionnaire']['DaddNumber']="";
    	$_SESSION['DeliveryQuestionnaire']['Dzip']="";
		$_SESSION['DeliveryQuestionnaire']['Dlastname']="";
    $_SESSION['DeliveryQuestionnaire']['Dcomments']="";
    }
?>
<center>
  <?php  include("header.php");?>

  <div class="text">
    <h1>Fill this out and we will get a hold of you as soon as possble</h1>
  </div>
  <form method="post" action="index.php?page=Deliverypage/DeliveryQuestionnaireMail" enctype="multipart/form-data">

    <div class="text">
      <p>
        Your Email: <input type="email" name="email" required=""/>

      </p>

    </div>


    <div class="adderessbox">
    <div class="column">
      <h1>PickUp</h1>

     
      <p>
        <input type="text" placeholder="First/Last Name Or Company" name="Pname" size="35" required=""/> 
      </p>
      <p>
        <input type="text" placeholder="Phone Number" name="Pnumber" min="10" maxlength="14" size="14"/>
      </p>

      <p>
        <input type="date"  name="Pdate" />
        <input type="time"  name="Ptime" />

      </p>
      <p>
        <input type="text" placeholder="Street"  name="PStreet" />
      </p>
      <p>
        <input type="text" placeholder="Apt/Suite number" name="PaddNumber" size="11" />

        <input type="text" placeholder="Zip" name="Pzip" min="5" maxlength="5" size="6"  />
      </p>
      <p>Comments: </p>
      <textarea name="Pcomments" rows="5" cols="30">
      </textarea>

    </div>
    <div class="column">
      <h1>DropOff</h1>
    
      <p>
        <input type="text" placeholder="First/Last Name Or Company" name="Dname" size="35" />
      </p>
      <p>
         <input type="text" placeholder="Phone Number" name="Dnumber" min="10" maxlength="14" size="14" />
      </p>

      <p>
        <input type="date"  name="Ddate" />
        <input type="time"  name="Dtime" />

      </p>
      <p>
        <input type="text" placeholder="Street"  name="DStreet" />
      </p>
      <p>
         <input type="text" placeholder="Apt/Suite number" name="DaddNumber" size="11" />

         <input type="text" placeholder="Zip" name="Dzip" min="5" maxlength="5" size="6"  />
      </p>
      <p>Comments: </p>
      <textarea name="Dcomments" rows="5" cols="30">
      </textarea>

    </div>
  </div>


    <div class="text">
      <h1>Talk about the thing we are deliving</h1>

      <p>What is it: </p>
      <textarea name="itIs" rows="5" cols="30">
      </textarea>

    </div>

    <div class="text">
      <input type="submit" name="submit" value="Submit" />
  </div>
 
  
  </form>
  
  </center>
