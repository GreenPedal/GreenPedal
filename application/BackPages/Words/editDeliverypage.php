<?php
	include("application/DBConnect/dbconnect.php");
session_start();
if(!isset($_SESSION['admin'])) {
header("Location:index.php");
}
if(isset($_GET['ID'])) {
$_SESSION['Deliverypage']['ID']=$_GET['ID'];
}
if(!isset($_SESSION['Deliverypage']['words'])) {
$Deliverypage_sql="SELECT * FROM deliverypage WHERE ID=".$_GET['ID'];
$Deliverypage_query=mysqli_query($dbconnect, $Deliverypage_sql);
$Deliverypage_rs=mysqli_fetch_assoc($Deliverypage_query);
$_SESSION['Deliverypage']['words']=$Deliverypage_rs['words'];
}
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
  <link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />
      <?php
      include 'css/css.html'; 
    ?>
</head>

<center>
  <div class="form">
	<h1>Old Text</h1>
    <greentext><?php echo $_SESSION['Deliverypage']['words']; ?></greentext>
    <form action="index.php?page=application/BackPages/Words/editDeliverypageconfirm" method="post">
      <textarea style="margin-top:10px;height:auto;"  name="words" rows="10" cols="30"><?php echo $_SESSION['Deliverypage']['words']; ?></textarea></br>
         <button type="submit" class="button button-block" name="update" value="Update">Update</button></br>
    </form>
	   <button onclick="history.go(-1);" style="margin-top:8px;" class="button button-block">Back</button>
  </div>
</center>