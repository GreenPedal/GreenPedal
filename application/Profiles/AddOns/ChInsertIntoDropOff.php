   <?php
   	include("application/DBConnect/dbconnect.php");

  $number = $street = $town = $county ='';
   session_start();

    $UserID = $_SESSION['ID'];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //print_r($_POST); use this to debug POST data 
  	$name = $_POST["name4"];
    $number = $_POST["street_number4"];  
    $street = $_POST["route4"];
    $town = $_POST["locality4"];
    $zip = $_POST["postal_code4"];
	$Comments = $_POST["Comments4"];
    $AptNumber = $_POST["AptNumber4"];



	  }

	$useraddress_sql="INSERT INTO dropoff (User_ID, Name, Number, Street, AptNumber,  City, Zip, comment) VALUES ('$UserID', '$name', '$number', '$street', '$AptNumber', '$town', '$zip',  '$Comments')";
	$useraddress_query=mysqli_query($mysqli, $useraddress_sql);
        if ($useraddress_query){
		header("Location:index.php?page=application/Profiles/Admin");
    }
	else{
	?>
	<div style="color:white;"><?php echo "nothing"?> 
	<?php echo("Error description: " . mysqli_error($mysqli));?>
	</div><?php
} 

  ?>
  