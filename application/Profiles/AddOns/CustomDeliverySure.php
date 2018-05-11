<head>
    <?php
	 session_start();
    $UserID = $_SESSION['ID'];
      include("application/DBConnect/dbconnect.php");
      include 'css/css.html'; 
	  if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['ItemNumber'] = $_POST["ItemNumber"];
        $_SESSION['PickUp'] = $_POST["PickUp"];
        $_SESSION['PickPerson'] = $_POST["PickPerson"];
        $_SESSION['DropOff'] = $_POST["DropOff"];
        $_SESSION['DropPerson'] = $_POST["DropPerson"];
        $_SESSION['DecItem'] = $_POST["DecItem"];
        $_SESSION['PickTime'] = $_POST["PickTime"];
        $_SESSION['DropTime'] = $_POST["DropTime"];

		$PickUp = $_POST['PickUp'];
        $DropOff = $_POST["DropOff"];
	  } 
	  $PickUpsend_sql="SELECT * FROM pickup WHERE Name='$PickUp' AND User_ID='$UserID'";
   	  $PickUpsend_query=mysqli_query($dbconnect, $PickUpsend_sql);
	  $PickUpsend_rs=mysqli_fetch_assoc($PickUpsend_query);

	  $DropOffsend_sql="SELECT * FROM dropoff WHERE Name='$DropOff' AND User_ID='$UserID'";
   	  $DropOffsend_query=mysqli_query($dbconnect, $DropOffsend_sql);
	  $DropOffsend_rs=mysqli_fetch_assoc($DropOffsend_query);

	  $NUmber = $PickUpsend_rs['ID'];
      $DropNumber = $DropOffsend_rs['ID'];
      $_SESSION['PickID'] = $NUmber;
      $_SESSION['DropID'] = $DropNumber;
    ?>
	<link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />
</head>
<div class="form">
<form  action="index.php?page=application/Profiles/AddOns/CustomDeliverySend" method="post">
    <h1>Is this right</h1>
	<h2>If not just correct it then send it</h2>
    <?php
            if ($NUmber<"0") { 
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	          $_SESSION['name'] = $_POST["name"];
              $_SESSION['street_number'] = $_POST["street_number"];  
              $_SESSION['route'] = $_POST["route"];
              $_SESSION['locality'] = $_POST["locality"];
              $_SESSION['postal_code'] = $_POST["postal_code"];
              $_SESSION['country'] = $_POST["country"];
	          $_SESSION['Comments'] = $_POST["Comments"];
              $_SESSION['State'] = $_POST["State"];
              $_SESSION['AptNumber'] = $_POST["AptNumber"];
		    }
    ?>
    <table id="addaddress">
    	<tr>
		   <div style="margin-top:10px;"><greentext>Pickin Up at: <?php echo $_SESSION['name'];?></greentext></div>
           <td class="slimField"><input placeholder="<?php echo $_SESSION['street_number'];?>" class="field" disabled="true"></input></td>
           <td class="wideField" colspan="2"><input placeholder="<?php echo $_SESSION['route'];?>" class="field" disabled="true"></input></td>
        </tr>
        <tr>
	      <td class="slimField"><input class="field" name="AptNumber" placeholder="<?php echo $_SESSION['AptNumber'];?>" disabled="true"></input></td>
          <td class="wideField" colspan="2"><input class="field" name="locality" placeholder="<?php echo $_SESSION['locality'];?>" disabled="true"></input></td>
        </tr>
        <tr>
          <td class="slimField"><input class="field" name="State" placeholder="<?php echo $_SESSION['State'];?>"  disabled="true"></input></td>
          <td class="wideField"><input class="field" name="postal_code" placeholder="<?php echo $_SESSION['postal_code'];?>"  disabled="true"></input></td>
        </tr>
        <tr>
          <td class="wideField" colspan="3"><input class="field" name="country" placeholder="<?php echo $_SESSION['country'];?>" disabled="true"></input></td>
        </tr>
        <tr>
          <td class="wideField" colspan="3"><textarea class="field" name="Comments" placeholder="<?php echo $_SESSION['Comments'];?>" ></textarea></td>
        </tr>
		<tr>
           <td class="wideField" colspan="2"><input placeholder="<?php echo $PickPerson;?>" class="field" disabled="true"></input></td>
		</tr>
    </table>
    <?php 
		     } else { 
    ?>
    <table id="addaddress">
    	<tr>
		   <div style="margin-top:10px;"><greentext>Pickin Up at:<?php echo $_SESSION['PickUp'];?></greentext></div>
           <td class="slimField"><input name="SavedPickNumber" placeholder="<?php echo $PickUpsend_rs['Number'];?>" class="field"  disabled="true"></input></td>
           <td class="wideField" colspan="2"><input name="SavedPickStreet" placeholder="<?php echo $PickUpsend_rs['Street'];?>" class="field" disabled="true"></input></td>
        </tr>
		<tr>
           <td class="wideField" colspan="2"><input placeholder="<?php echo $_SESSION['PickPerson'];?>" class="field" disabled="true"></input></td>
		</tr>
    </table>
    <?php 
		  }
	?>
    <?php
            if ($DropNumber<"0") { 
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	          $_SESSION['name5'] = $_POST["name5"];
              $_SESSION['street_number5'] = $_POST["street_number5"];  
              $_SESSION['route5'] = $_POST["route5"];
              $_SESSION['locality5'] = $_POST["locality5"];
              $_SESSION['postal_code5'] = $_POST["postal_code5"];
              $_SESSION['country5'] = $_POST["country5"];
	          $_SESSION['Comments5'] = $_POST["Comments5"];
              $_SESSION['State5'] = $_POST["State5"];
              $_SESSION['AptNumber5'] = $_POST["AptNumber5"];





  	          $name5 = $_POST["name5"];
              $Stnumber5 = $_POST["street_number5"];  
              $street5 = $_POST["route5"];
              $town5 = $_POST["locality5"];
              $zip5 = $_POST["postal_code5"];
              $country5 = $_POST["country5"];
	          $Comments5 = $_POST["Comments5"];
              $State5 = $_POST["State5"];
              $AptNumber5 = $_POST["AptNumber5"];
		    }
	?>
    <table id="addaddress">
    	<tr>
		   <div style="margin-top:10px;"><greentext>Droping Off at: <?php echo $_SESSION['name5'];?></greentext></div>
           <td class="slimField"><input placeholder="<?php echo $_SESSION['street_number5'];?>" class="field" disabled="true"></input></td>
           <td class="wideField" colspan="2"><input placeholder="<?php echo $_SESSION['route5'];?>" class="field" disabled="true"></input></td>
        </tr>
        <tr>
	      <td class="slimField"><input class="field" placeholder="<?php echo $_SESSION['AptNumber5'];?>" disabled="true"></input></td>
          <td class="wideField" colspan="2"><input class="field" placeholder="<?php echo $_SESSION['locality5'];?>" disabled="true"></input></td>
        </tr>
        <tr>
          <td class="slimField"><input class="field" placeholder="<?php echo $_SESSION['State5'];?>"  disabled="true"></input></td>
          <td class="wideField"><input class="field" placeholder="<?php echo $_SESSION['postal_code5'];?>"  disabled="true"></input></td>
        </tr>
        <tr>
          <td class="wideField" colspan="3"><input class="field" id="country" placeholder="<?php echo $_SESSION['country5'];?>" disabled="true"></input></td>
        </tr>
        <tr>
          <td class="wideField" colspan="3"><textarea class="field" placeholder="<?php echo $_SESSION['Comments5'];?>" ></textarea></td>
        </tr>
		<tr>
           <td class="wideField" colspan="2"><input placeholder="<?php echo $_SESSION['DropPerson'];?>" class="field" disabled="true"></input></td>
		</tr>
    </table>
    <?php 
		     } else { 
	?>
    <table id="addaddress">
    	<tr>
           <div style="margin-top:10px;"><greentext>Droppin off at: <?php echo $_SESSION['DropOff'];?></greentext></div>
           <td class="slimField"><input placeholder="<?php echo $DropOffsend_rs['Number'];?>" class="field" disabled="true"></input></td>
           <td class="wideField" colspan="2"><input placeholder="<?php echo $DropOffsend_rs['Street'];?>" class="field" disabled="true"></input></td>
        </tr>
		<tr>
           <td class="wideField" colspan="2"><input placeholder="<?php echo $_SESSION['DropPerson'];?>" class="field" disabled="true"></input></td>
		</tr>
		<?php 
		   } 
		?>
    </table>


    <table id="addaddress">
    	<tr>
		   <td class="slimField"><greentext>PickUp</greentext></td>
           <td class="wideField" colspan="1"><input placeholder="<?php echo $_SESSION['PickTime'];?>" class="field" disabled="true"></input></td>
        </tr>
    	<tr>
		   <td class="slimField"><greentext>DropOff</greentext></td>
           <td class="wideField" colspan="1"><input placeholder="<?php echo $_SESSION['DropTime'];?>" class="field" disabled="true"></input></td>
        </tr>
    	<tr>
		   <td class="slimField"><greentext>Item number</greentext></td>
           <td class="wideField" colspan="1"><input placeholder="<?php echo $_SESSION['ItemNumber'];?>" class="field" disabled="true"></input></td>
        </tr>
    	<tr>
           <td class="wideField" colspan="3"><textarea placeholder="<?php echo $_SESSION['DecItem'];?>" class="field" disabled="true"></textarea></td>
        </tr>
    </table>
    <button class="button button-block" type="submit" style="margin-top:10px;">Send Your deliver</button>
</form>
    <button onclick="history.go(-1);" style="margin-top:10px;" class="button button-block"/>Back</button>
</div>
