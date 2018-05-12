<head>
    <?php
        include("application/DBConnect/dbconnect.php");
	    session_start();
        $UserID = $_SESSION['ID']; 
        $PickUp = $_SESSION['PickUp'];
        $DropOff = $_SESSION['DropOff'];
		$PickUpPerson = $_SESSION['PickUpPerson'];
		$DropOffPerson = $_SESSION['DropOffPerson'];
		$AddPickFName = $_SESSION['AddPickFName'];
		$AddDropFName = $_SESSION['AddDropFName'];
		//** Package
        $ItemNumber = $_SESSION['ItemNumber'];
        $DecItem = $_SESSION['DecItem'];
		//** Pick up time and date
        $PickTime = $_SESSION['PickTime'];
        $Pickdate = $_SESSION['Pickdate'];
		//** Drop Off time and date
        $DropTime = $_SESSION['DropTime'];
        $Dropdate = $_SESSION['Dropdate'];
        $email = $_SESSION['email'];
        date_default_timezone_set("America/Los_Angeles");
		$date = date("m-d-Y h:ia");
		
	    //**Getting Saved PickUp Person ID
	    $PickName_sql="SELECT * FROM pickupperson WHERE FName='$PickUpPerson' AND UserID='$UserID'";
   	    $PickName_query=mysqli_query($dbconnect, $PickName_sql);
	    $PickName_rs=mysqli_fetch_assoc($PickName_query);
		$PNameID = $PickName_rs['ID'];
	    //**If saved DropOff PersonID
	    $DropOffName_sql="SELECT * FROM dropoffperson WHERE FName='$DropOffPerson' AND UserID='$UserID'";
   	    $DropOffName_query=mysqli_query($dbconnect, $DropOffName_sql);
	    $DropOffName_rs=mysqli_fetch_assoc($DropOffName_query);
		$DNameID = $DropOffName_rs['ID'];
	    //**Getting PickUp Person ID
	    $PickName_sql="SELECT * FROM pickupperson WHERE FName='$AddPickFName' AND UserID='$UserID'";
   	    $PickName_query=mysqli_query($dbconnect, $PickName_sql);
	    $PickName_rs=mysqli_fetch_assoc($PickName_query);
		$PNameID = $PickName_rs['ID'];
	    //**If DropOff PersonID
	    $DropOffName_sql="SELECT * FROM dropoffperson WHERE FName='$AddDropFName' AND UserID='$UserID'";
   	    $DropOffName_query=mysqli_query($dbconnect, $DropOffName_sql);
	    $DropOffName_rs=mysqli_fetch_assoc($DropOffName_query);
		$DNameID = $DropOffName_rs['ID'];

	    if ($PickUp >"0" AND $DropOff >"0") {
		  //**getting Pick Up adress Information
	      $PickUpsend_sql="SELECT * FROM pickup WHERE Name='$PickUp' AND User_ID='$UserID'";
   	      $PickUpsend_query=mysqli_query($dbconnect, $PickUpsend_sql);
	      $PickUpsend_rs=mysqli_fetch_assoc($PickUpsend_query);
		  //** Saved Pick Up 
	      $PID = $PickUpsend_rs['ID'];
	      $PName = $PickUpsend_rs['Name'];
	      $PNumber = $PickUpsend_rs['Number'];
	      $PStreet = $PickUpsend_rs['Street'];
	      $PApt = $PickUpsend_rs['AptNumber'];
	      $PCity = $PickUpsend_rs['City'];
	      $PZip = $PickUpsend_rs['Zip'];
	      $Pcomment = $PickUpsend_rs['comment'];

		  //**getting Drop Off address Information
	      $DropOffsend_sql="SELECT * FROM dropoff WHERE Name='$DropOff' AND User_ID='$UserID'";
   	      $DropOffsend_query=mysqli_query($dbconnect, $DropOffsend_sql);
	      $DropOffsend_rs=mysqli_fetch_assoc($DropOffsend_query);
		  //** Saved dropOff 
		  $DName = $PickUpsend_rs['Name'];
	      $DNumber = $PickUpsend_rs['Number'];
	      $DStreet = $PickUpsend_rs['Street'];
	      $DApt = $PickUpsend_rs['AptNumber'];
	      $DCity = $PickUpsend_rs['City'];
	      $DZip = $PickUpsend_rs['Zip'];
	      $Dcomment = $PickUpsend_rs['comment'];
		  $date = date("Y/m/d");
		  
	      //**INSERT in to custom delivery database
		  $CSAdress_sql="INSERT INTO customdelivery (User_ID, UserEmail, DandTmade, PickTime, PickDate, DropTime, DropDate, PickAdressNumber, PickStreet, PickAptNumber, PickZip, PickCity, Pickcomment, PickPerson, DropAdressNumber, DropStreet, DropAptNumber, DropZip, DropCity, Dropcomment, DropPerson, ItemNumber, Description) VALUES ('$UserID', '$email', '$date', '$PickTime', '$Pickdate', '$DropTime', '$Dropdate', '$PNumber', '$PStreet', '$PApt', '$PZip', '$PCity',  '$Pcomment', '$PNameID', '$DNumber', '$DStreet', '$DApt', '$DZip', '$DCity',  '$Dcomment', '$DNameID', '$ItemNumber', '$DecItem')";
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
	          $CAddress_sql="INSERT INTO customdelivery (User_ID, UserEmail, DandTmade, PickTime, PickDate, DropTime, DropDate, PickAdressNumber, PickStreet, PickAptNumber, PickZip, PickCity, Pickcomment, PickPerson, DropAdressNumber, DropStreet, DropAptNumber, DropZip, DropCity, Dropcomment, DropPerson, ItemNumber, Description) VALUES ('$UserID', '$email', '$date', '$PickTime', '$Pickdate', '$DropTime', '$Dropdate', '$street_number', '$route', '$AptNumber', '$zip', '$town',  '$Comments', '$PNameID', '$street_number5', '$route5', '$AptNumber5', '$zip5', '$town5',  '$Comments5', '$DNameID', '$ItemNumber', '$DecItem')";
	          $CAddress_query=mysqli_query($mysqli, $CAddress_sql);

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

	      $CSAdress_sql="INSERT INTO customdelivery (User_ID, UserEmail, DandTmade, PickTime, PickDate, DropTime, DropDate, PickAdressNumber, PickStreet, PickAptNumber, PickZip, PickCity, Pickcomment, PickPerson, DropAdressNumber, DropStreet, DropAptNumber, DropZip, DropCity, Dropcomment, ItemNumber, Description) VALUES ('$UserID', '$email', '$date',  '$PickTime', '$Pickdate', '$DropTime', '$Dropdate', '$street_number', '$route', '$AptNumber', '$zip', '$town',  '$Comments', '$PNameID', '$DNumber', '$DStreet', '$DApt', '$DZip', '$DCity',  '$Dcomment', '$DNameID', '$ItemNumber', '$DecItem')";
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


	      $CAddress_sql="INSERT INTO customdelivery (User_ID, UserEmail, DandTmade, PickTime,  PickDate, DropTime, DropDate, PickAdressNumber, PickStreet, PickAptNumber, PickZip, PickCity, Pickcomment, DropAdressNumber, DropStreet, DropAptNumber, DropZip, DropCity, Dropcomment) VALUES ('$UserID', '$date', '$PickTime', '$DropTime', '$PNumber', '$PStreet', '$PApt', '$PZip', '$PCity',  '$Pcomment', '$street_number5', '$route5', '$AptNumber5', '$zip5', '$town5',  '$Comments5')";
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
  <h2>We sent you an email and we will get a hold of your as so as we can <?php echo $PickUpPerson; ?></h2>
  <a href="index.php?page=application/Profiles/Admin"><button class="button button-block" type="submit" style="margin-top:10px;">Go Back To Profile</button></a>
  </div>
</body>
