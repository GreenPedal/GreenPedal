<head>
    <?php
      include("application/DBConnect/dbconnect.php");
      include 'css/css.html'; 
	  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  	$ItemNumber = $_POST["ItemNumber"];
	  	$PickUp = $_POST["PickUp"];
		$PickPerson = $_POST["PickPerson"];
	  	$DropOff = $_POST["DropOff"];
		$DropPerson = $_POST["DropPerson"];
		$DecItem = $_POST["DecItem"];
	  } 
	  $PickUpsend_sql="SELECT * FROM pickup WHERE Name='$PickUp'";
   	  $PickUpsend_query=mysqli_query($dbconnect, $PickUpsend_sql);
	  $PickUpsend_rs=mysqli_fetch_assoc($PickUpsend_query);

	  $DropOffsend_sql="SELECT * FROM dropoff WHERE Name='$DropOff'";
   	  $DropOffsend_query=mysqli_query($dbconnect, $DropOffsend_sql);
	  $DropOffsend_rs=mysqli_fetch_assoc($DropOffsend_query);

	  $NUmber = $PickUpsend_rs['Number'];
	  $DropNumber = $DropOffsend_rs['Number'];
    ?>
	<link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />
</head>
<div class="form">
    <h1>Is this right</h1>
	<h2>If not just correct it then send it</h2>
    <?php
            if ($NUmber<"0") { 
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	          $name = $_POST["name"];
              $Stnumber = $_POST["street_number"];  
              $street = $_POST["route"];
              $town = $_POST["locality"];
              $zip = $_POST["postal_code"];
              $country = $_POST["country"];
	          $Comments = $_POST["Comments"];
              $State = $_POST["State"];
              $AptNumber = $_POST["AptNumber"];
		    }
    ?>
    <table id="addaddress">
    	<tr>
		   <div style="margin-top:10px;"><greentext>Pickin Up at: <?php echo $name;?></greentext></div>
           <td class="slimField"><input placeholder="<?php echo $Stnumber;?>" class="field" disabled="true"></input></td>
           <td class="wideField" colspan="2"><input placeholder="<?php echo $street;?>" class="field" disabled="true"></input></td>
        </tr>
        <tr>
	      <td class="slimField"><input class="field" placeholder="<?php echo $AptNumber;?>" disabled="true"></input></td>
          <td class="wideField" colspan="2"><input class="field" placeholder="<?php echo $town;?>" disabled="true"></input></td>
        </tr>
        <tr>
          <td class="slimField"><input class="field" placeholder="<?php echo $State;?>"  disabled="true"></input></td>
          <td class="wideField"><input class="field" placeholder="<?php echo $zip;?>"  disabled="true"></input></td>
        </tr>
        <tr>
          <td class="wideField" colspan="3"><input class="field" id="country" placeholder="<?php echo $country;?>" disabled="true"></input></td>
        </tr>
        <tr>
          <td class="wideField" colspan="3"><textarea class="field" placeholder="<?php echo $Comments;?>" ></textarea></td>
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
		   <div style="margin-top:10px;"><greentext>Pickin Up at: <?php echo $PickUp;?></greentext></div>
           <td class="slimField"><input placeholder="<?php echo $PickUpsend_rs['Number'];?>" class="field" disabled="true"></input></td>
           <td class="wideField" colspan="2"><input placeholder="<?php echo $PickUpsend_rs['Street'];?>" class="field" disabled="true"></input></td>
        </tr>
		<tr>
           <td class="wideField" colspan="2"><input placeholder="<?php echo $PickPerson;?>" class="field" disabled="true"></input></td>
		</tr>
    </table>
    <?php 
		  }
	?>
    <?php
            if ($DropNumber<"0") { 
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
		   <div style="margin-top:10px;"><greentext>Pickin Up at: <?php echo $name5;?></greentext></div>
           <td class="slimField"><input placeholder="<?php echo $Stnumber5;?>" class="field" disabled="true"></input></td>
           <td class="wideField" colspan="2"><input placeholder="<?php echo $street5;?>" class="field" disabled="true"></input></td>
        </tr>
        <tr>
	      <td class="slimField"><input class="field" placeholder="<?php echo $AptNumber5;?>" disabled="true"></input></td>
          <td class="wideField" colspan="2"><input class="field" placeholder="<?php echo $town5;?>" disabled="true"></input></td>
        </tr>
        <tr>
          <td class="slimField"><input class="field" placeholder="<?php echo $State5;?>"  disabled="true"></input></td>
          <td class="wideField"><input class="field" placeholder="<?php echo $zip5;?>"  disabled="true"></input></td>
        </tr>
        <tr>
          <td class="wideField" colspan="3"><input class="field" id="country" placeholder="<?php echo $country5;?>" disabled="true"></input></td>
        </tr>
        <tr>
          <td class="wideField" colspan="3"><textarea class="field" placeholder="<?php echo $Comments5;?>" ></textarea></td>
        </tr>
		<tr>
           <td class="wideField" colspan="2"><input placeholder="<?php echo $DropPerson;?>" class="field" disabled="true"></input></td>
		</tr>
    </table>
    <?php 
		     } else { 
	?>
    <table id="addaddress">
    	<tr>
           <div style="margin-top:10px;"><greentext>Droppin off at: <?php echo $DropOff;?></greentext></div>
           <td class="slimField"><input placeholder="<?php echo $DropOffsend_rs['Number'];?>" class="field" disabled="true"></input></td>
           <td class="wideField" colspan="2"><input placeholder="<?php echo $DropOffsend_rs['Street'];?>" class="field" disabled="true"></input></td>
        </tr>
		<tr>
           <td class="wideField" colspan="2"><input placeholder="<?php echo $DropPerson;?>" class="field" disabled="true"></input></td>
		</tr>
		<?php 
		   } 
		?>
    </table>
    <table id="addaddress">
    	<tr>
		   <td class="slimField"><greentext>Item number</greentext></td>
           <td class="wideField" colspan="1"><input placeholder="<?php echo $ItemNumber;?>" class="field" disabled="true"></input></td>
        </tr>
    	<tr>
           <td class="wideField" colspan="3"><textarea placeholder="<?php echo $DecItem;?>" class="field" disabled="true"></textarea></td>
        </tr>
    </table>
    <button class="button button-block" type="submit" style="margin-top:10px;">Send Your deliver</button>
    <button onclick="history.go(-1);" style="margin-top:10px;" class="button button-block"/>Back</button>
</div>
