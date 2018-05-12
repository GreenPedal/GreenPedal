<?php
        include("application/DBConnect/dbconnect.php");
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$PickUpPerson = $_POST["PickUpPerson"];
		$DropOffPerson = $_POST["DropOffPerson"];
		         $AddPickFName = $_POST["AddPickFName"];
		         $AddPickLName = $_POST["AddPickLName"];
		         $AddDropFName = $_POST["AddDropFName"];
		         $AddDropLName = $_POST["AddDropLName"];
		}
	    session_start();
		$_SESSION['PickUpPerson'] = $PickUpPerson;
		$_SESSION['DropOffPerson'] = $DropOffPerson;

		$_SESSION['AddPickFName'] = $AddPickFName;
		$_SESSION['AddPickLName'] = $AddPickLName;
		$_SESSION['AddDropFName'] = $AddDropFName;
		$_SESSION['AddDropLName'] = $AddDropLName;

        $UserID = $_SESSION['ID']; 
        $PickUp = $_SESSION['PickUp'];
        $DropOff = $_SESSION['DropOff'];
		$PickUpPerson = $_SESSION['PickUpPerson'];
		$DropOffPerson = $_SESSION['DropOffPerson'];
		$AddPickFName = $_SESSION['AddPickFName'];
		$AddDropFName = $_SESSION['AddDropFName'];
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
			              header("location: index.php?page=application/Profiles/AddOns/CustomDeliveryPeopleSend");
}
?>