<head>
    <?php
        include("application/DBConnect/dbconnect.php");
	    session_start();
        $UserID = $_SESSION['ID']; 
        $number = $_SESSION['ItemNumber'];
        $PickUp = $_SESSION['PickUp'];
        $PickPerson = $_SESSION['PickPerson'];
        $DropOff = $_SESSION['DropOff'];
        $DropPerson = $_SESSION['DropPerson'];
        $DecItem = $_SESSION['DecItem'];
        $PickTime = $_SESSION['PickTime'];
        $DropTime = $_SESSION['DropTime'];
        date_default_timezone_set("America/Los_Angeles");
		$date = date("m-d-Y h:ia");

	    if ($PickUp >"0" AND $DropOff >"0") {
	      $PickUpsend_sql="SELECT * FROM pickup WHERE Name='$PickUp' AND User_ID='$UserID'";
   	      $PickUpsend_query=mysqli_query($dbconnect, $PickUpsend_sql);
	      $PickUpsend_rs=mysqli_fetch_assoc($PickUpsend_query);

	      $DropOffsend_sql="SELECT * FROM dropoff WHERE Name='$DropOff' AND User_ID='$UserID'";
   	      $DropOffsend_query=mysqli_query($dbconnect, $DropOffsend_sql);
	      $DropOffsend_rs=mysqli_fetch_assoc($DropOffsend_query);

	      $PName = $PickUpsend_rs['Name'];
	      $PNumber = $PickUpsend_rs['Number'];
	      $PStreet = $PickUpsend_rs['Street'];
	      $PApt = $PickUpsend_rs['AptNumber'];
	      $PCity = $PickUpsend_rs['City'];
	      $PZip = $PickUpsend_rs['Zip'];
	      $Pcomment = $PickUpsend_rs['comment'];

		  $DName = $PickUpsend_rs['Name'];
	      $DNumber = $PickUpsend_rs['Number'];
	      $DStreet = $PickUpsend_rs['Street'];
	      $DApt = $PickUpsend_rs['AptNumber'];
	      $DCity = $PickUpsend_rs['City'];
	      $DZip = $PickUpsend_rs['Zip'];
	      $Dcomment = $PickUpsend_rs['comment'];
		  $date = date("Y/m/d");

	      $CSAdress_sql="INSERT INTO customdelivery (User_ID, DandTmade, PickTime, DropTime, PickAdressNumber, PickStreet, PickAptNumber, PickZip, PickCity, Pickcomment, DropAdressNumber, DropStreet, DropAptNumber, DropZip, DropCity, Dropcomment) VALUES ('$UserID', '$date', '$PickTime', '$DropTime',  '$PNumber', '$PStreet', '$PApt', '$PZip', '$PCity',  '$Pcomment', '$DNumber', '$DStreet', '$DApt', '$DZip', '$DCity',  '$Dcomment')";
	      $CSAdress_query=mysqli_query($mysqli, $CSAdress_sql);
		} elseif ($PickUp <"0" AND $DropOff <"0") {
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
	          $CAddress_sql="INSERT INTO customdelivery (User_ID, DandTmade, PickTime, DropTime, PickAdressNumber, PickStreet, PickAptNumber, PickZip, PickCity, Pickcomment, DropAdressNumber, DropStreet, DropAptNumber, DropZip, DropCity, Dropcomment) VALUES ('$UserID', '$date', '$PickTime', '$DropTime', '$street_number', '$route', '$AptNumber', '$zip', '$town',  '$Comments', '$street_number5', '$route5', '$AptNumber5', '$zip5', '$town5',  '$Comments5')";
	          $CAddress_query=mysqli_query($mysqli, $CAddress_sql);
	          $useraddress_sql="INSERT INTO pickup (User_ID, Name, Number, Street, AptNumber, Zip, City, comment) VALUES ('$UserID', '$name', '$street_number', '$route', '$AptNumber', '$zip', '$town',  '$Comments')";
	          $useraddress_query=mysqli_query($mysqli, $useraddress_sql);
	          $DropOffAdress_sql="INSERT INTO dropoff (User_ID, Name, Number, Street, AptNumber, Zip, City, comment) VALUES ('$UserID', '$name5', '$street_number5', '$route5', '$AptNumber5', '$zip5', '$town5',  '$Comments5')";
	          $DropOffAdress_query=mysqli_query($mysqli, $DropOffAdress_sql);

	    } elseif ($PickUp <"0" AND $DropOff >"0") {

	      $DropOffsend_sql="SELECT * FROM dropoff WHERE Name='$DropOff' AND User_ID='$UserID'";
   	      $DropOffsend_query=mysqli_query($dbconnect, $DropOffsend_sql);
	      $DropOffsend_rs=mysqli_fetch_assoc($DropOffsend_query);


  	      $name = $_SESSION["name"];
          $street_number = $_SESSION["street_number"];  
          $route= $_SESSION["route"];
          $town = $_SESSION["locality"];
          $zip = $_SESSION["postal_code"];
          $country = $_SESSION["country"];
	      $Comments = $_SESSION["Comments"];
          $State = $_SESSION["State"];
          $AptNumber = $_SESSION["AptNumber"];


		  $DName = $DropOffsend_rs['Name'];
	      $DNumber = $DropOffsend_rs['Number'];
	      $DStreet = $DropOffsend_rs['Street'];
	      $DApt = $DropOffsend_rs['AptNumber'];
	      $DCity = $DropOffsend_rs['City'];
	      $DZip = $DropOffsend_rs['Zip'];
	      $Dcomment = $DropOffsend_rs['comment'];

	      $CSAdress_sql="INSERT INTO customdelivery (User_ID, DandTmade, PickTime, DropTime, PickAdressNumber, PickStreet, PickAptNumber, PickZip, PickCity, Pickcomment, DropAdressNumber, DropStreet, DropAptNumber, DropZip, DropCity, Dropcomment) VALUES ('$UserID', '$date', '$PickTime', '$DropTime', '$street_number', '$route', '$AptNumber', '$zip', '$town',  '$Comments', '$DNumber', '$DStreet', '$DApt', '$DZip', '$DCity',  '$Dcomment')";
	      $CSAdress_query=mysqli_query($mysqli, $CSAdress_sql);

	      $useraddress_sql="INSERT INTO pickup (User_ID, Name, Number, Street, AptNumber, Zip, City, comment) VALUES ('$UserID', '$name', '$street_number', '$route', '$AptNumber', '$zip', '$town',  '$Comments')";
	      $useraddress_query=mysqli_query($mysqli, $useraddress_sql);

		} else {


	      $PickUpsend_sql="SELECT * FROM pickup WHERE Name='$PickUp' AND User_ID='$UserID'";
   	      $PickUpsend_query=mysqli_query($dbconnect, $PickUpsend_sql);
	      $PickUpsend_rs=mysqli_fetch_assoc($PickUpsend_query);

	      $PName = $PickUpsend_rs['Name'];
	      $PNumber = $PickUpsend_rs['Number'];
	      $PStreet = $PickUpsend_rs['Street'];
	      $PApt = $PickUpsend_rs['AptNumber'];
	      $PCity = $PickUpsend_rs['City'];
	      $PZip = $PickUpsend_rs['Zip'];
	      $Pcomment = $PickUpsend_rs['comment'];

  	      $name5 = $_SESSION["name5"];
          $street_number5 = $_SESSION["street_number5"];  
          $route5= $_SESSION["route5"];
          $town5 = $_SESSION["locality5"];
          $zip5 = $_SESSION["postal_code5"];
          $country5 = $_SESSION["country5"];
	      $Comments5 = $_SESSION["Comments5"];
          $State5 = $_SESSION["State5"];
          $AptNumber5 = $_SESSION["AptNumber5"];


	      $CAddress_sql="INSERT INTO customdelivery (User_ID, DandTmade, PickTime, DropTime, PickAdressNumber, PickStreet, PickAptNumber, PickZip, PickCity, Pickcomment, DropAdressNumber, DropStreet, DropAptNumber, DropZip, DropCity, Dropcomment) VALUES ('$UserID', '$date', '$PickTime', '$DropTime', '$PNumber', '$PStreet', '$PApt', '$PZip', '$PCity',  '$Pcomment', '$street_number5', '$route5', '$AptNumber5', '$zip5', '$town5',  '$Comments5')";
	      $CAddress_query=mysqli_query($mysqli, $CAddress_sql);
	      $DropOffAdress_sql="INSERT INTO dropoff (User_ID, Name, Number, Street, AptNumber, Zip, City, comment) VALUES ('$UserID', '$name5', '$street_number5', '$route5', '$AptNumber5', '$zip5', '$town5',  '$Comments5')";
	      $DropOffAdress_query=mysqli_query($mysqli, $DropOffAdress_sql);
		}

   include 'css/css.html'; 
   
    ?>
	<link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />

</head>
<body>
  <div class="form">
  <h1>Thank You</h1>
  <h2>We sent you an email and we will get a hold of your as so as we can</h2>
  <a href="index.php?page=application/Profiles/Admin"><button class="button button-block" type="submit" style="margin-top:10px;">Go Back To Profile</button></a>
  </div>
</body>
dm,n,dfnasdf