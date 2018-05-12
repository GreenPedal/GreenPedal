	<link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />
<?php
        include("application/DBConnect/dbconnect.php");
        include 'css/css.html'; 
	    session_start();
        $PickUp = $_SESSION['PickUp'];
        $DropOff = $_SESSION['DropOff'];
        $UserID = $_SESSION['ID']; 
  	    $name = $_SESSION["name"];
  	    $name5 = $_SESSION["name5"];
		$PickUpPerson = $_SESSION['PickUpPerson'];
		$DropOffPerson = $_SESSION['DropOffPerson'];
	    $AddPickFName = $_SESSION['AddPickFName'];
	    $AddPickLName = $_SESSION['AddPickLName'];
		$AddDropFName = $_SESSION["AddDropFName"];
		$AddDropLName = $_SESSION["AddDropLName"];

	    //**If saved PickUp Person AddressID
	    $PickName_sql="SELECT * FROM pickupperson WHERE FName='$PickUpPerson' AND UserID='$UserID'";
   	    $PickName_query=mysqli_query($dbconnect, $PickName_sql);
	    $PickName_rs=mysqli_fetch_assoc($PickName_query);
		$PNameID = $PickName_rs['ID'];
	    //**If saved DropOff Person AddressID
	    $DropOffName_sql="SELECT * FROM dropoffperson WHERE FName='$DropOffPerson' AND UserID='$UserID'";
   	    $DropOffName_query=mysqli_query($dbconnect, $DropOffName_sql);
	    $DropOffName_rs=mysqli_fetch_assoc($DropOffName_query);
		$DNameID = $DropOffName_rs['ID'];

	    if ($PNameID >"0" AND $DNameID >"0" ) {

        header("location: index.php?page=application/Profiles/AddOns/CustomDeliverySend");
		} elseif ($PNameID >"0" And $DNameID <"0") {
	             //**DropOff AddressID INformation
	             $DropOffUpsend_sql="SELECT * FROM dropoff WHERE Name='$DropOff' AND User_ID='$UserID'";
   	             $DropOffUpsend_query=mysqli_query($dbconnect, $DropOffUpsend_sql);
	             $DropOffUpsend_rs=mysqli_fetch_assoc($DropOffUpsend_query);
	             $DID = $DropOffUpsend_rs['ID'];

				 //**Insert the new Drop Off Person 
	             $Dropaddress_sql="INSERT INTO dropoffperson (AddressID, UserID, FName, LName) VALUES ('$DID', '$UserID', '$AddDropFName', '$AddDropLName')";
	             $Dropaddress_query=mysqli_query($mysqli, $Dropaddress_sql);
            header("location: index.php?page=application/Profiles/AddOns/CustomDeliverySend");
		} elseif ($PNameID <"0" And $DNameID >"0") {

	             //**PickUp AddressID INformation
	             $PickUpsend_sql="SELECT * FROM pickup WHERE Name='$PickUp' AND User_ID='$UserID'";
   	             $PickUpsend_query=mysqli_query($dbconnect, $PickUpsend_sql);
	             $PickUpsend_rs=mysqli_fetch_assoc($PickUpsend_query);
	             $PID = $PickUpsend_rs['ID'];

				 //**Insert the new Pick Up Person 
	             $Pickaddress_sql="INSERT INTO pickupperson (AddressID, UserID, FName, LName) VALUES ('$PID', '$UserID', '$AddPickFName', '$AddPickLName')";
	             $Pickaddress_query=mysqli_query($mysqli, $Pickaddress_sql);
		} else {
				if ($PickUp <"0" AND $DropOff <"0") {
  	          $name = $_SESSION["name"];
              $street_number = $_SESSION["street_number"];  
              $route= $_SESSION["route"];
              $town = $_SESSION["locality"];
              $zip = $_SESSION["postal_code"];
              $country = $_SESSION["country"];
	          $Comments = $_SESSION["Comments"];
              $State = $_SESSION["State"];
              $AptNumber = $_SESSION["AptNumber"];
  	          $name5 = $_SESSION["name5"];
              $street_number5 = $_SESSION["street_number5"];  
              $route5= $_SESSION["route5"];
              $town5 = $_SESSION["locality5"];
              $zip5 = $_SESSION["postal_code5"];
              $country5 = $_SESSION["country5"];
	          $Comments5 = $_SESSION["Comments5"];
              $State5 = $_SESSION["State5"];
              $AptNumber5 = $_SESSION["AptNumber5"];
	          $useraddress_sql="INSERT INTO pickup (User_ID, Name, Number, Street, AptNumber, Zip, City, comment) VALUES ('$UserID', '$name', '$street_number', '$route', '$AptNumber', '$zip', '$town',  '$Comments')";
	          $useraddress_query=mysqli_query($mysqli, $useraddress_sql);
	          $DropOffAdress_sql="INSERT INTO dropoff (User_ID, Name, Number, Street, AptNumber, Zip, City, comment) VALUES ('$UserID', '$name5', '$street_number5', '$route5', '$AptNumber5', '$zip5', '$town5',  '$Comments5')";
	          $DropOffAdress_query=mysqli_query($mysqli, $DropOffAdress_sql);
		     }

	             //**PickUp AddressID INformation
	             $PickUpsend_sql="SELECT * FROM pickup WHERE Name='$PickUp' AND User_ID='$UserID'";
   	             $PickUpsend_query=mysqli_query($dbconnect, $PickUpsend_sql);
	             $PickUpsend_rs=mysqli_fetch_assoc($PickUpsend_query);
	             $AddPickUpsend_sql="SELECT * FROM pickup WHERE Name='$name' AND User_ID='$UserID'";
   	             $AddPickUpsend_query=mysqli_query($dbconnect, $AddPickUpsend_sql);
	             $AddPickUpsend_rs=mysqli_fetch_assoc($AddPickUpsend_query);
	             $PID = $AddPickUpsend_rs['ID'];
	             $PID = $PickUpsend_rs['ID'];
	             //**DropOff AddressID INformation
	             $DropOffUpsend_sql="SELECT * FROM dropoff WHERE Name='$DropOff' AND User_ID='$UserID'";
   	             $DropOffUpsend_query=mysqli_query($dbconnect, $DropOffUpsend_sql);
	             $DropOffUpsend_rs=mysqli_fetch_assoc($DropOffUpsend_query);
	             $AddDropOffUpsend_sql="SELECT * FROM dropoff WHERE Name='$name5' AND User_ID='$UserID'";
   	             $AddDropOffUpsend_query=mysqli_query($dbconnect, $AddDropOffUpsend_sql);
	             $AddDropOffUpsend_rs=mysqli_fetch_assoc($AddDropOffUpsend_query);
	             $DID = $DropOffUpsend_rs['ID'];
	             $DID = $AddDropOffUpsend_rs['ID'];


				 //**Insert the new Pick Up Person 
	             $Pickaddress_sql="INSERT INTO pickupperson (AddressID, UserID, FName, LName) VALUES ('$PID', '$UserID', '$AddPickFName', '$AddPickLName')";
	             $Pickaddress_query=mysqli_query($mysqli, $Pickaddress_sql);
				 //**Insert the new Drop Off Person 
	             $Dropaddress_sql="INSERT INTO dropoffperson (AddressID, UserID, FName, LName) VALUES ('$DID', '$UserID', '$AddDropFName', '$AddDropLName')";
	             $Dropaddress_query=mysqli_query($mysqli, $Dropaddress_sql);
	    }
?>