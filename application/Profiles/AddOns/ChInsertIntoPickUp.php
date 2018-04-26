   <?php
   	include("application/DBConnect/dbconnect.php");

  $number = $street = $town = $county ='';
   session_start();

    $UserID = $_SESSION['ID'];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //print_r($_POST); use this to debug POST data 
  

	  	$name = $_POST["name3"];
    $number = $_POST["street_number3"];  
    $street = $_POST["route3"];
    $town = $_POST["locality3"];
    $zip = $_POST["postal_code3"];
	$Comments = $_POST["Comments3"];
    $AptNumber = $_POST["AptNumber3"];

	  }

	$useraddress_sql="INSERT INTO pickup (User_ID, Name, Number, Street, AptNumber, Zip, City, comment) VALUES ('$UserID', '$name', '$number', '$street', '$AptNumber', '$zip', '$town',  '$Comments')";
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
  