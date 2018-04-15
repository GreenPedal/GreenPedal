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
  <link href="application/BackPages/css/style.css" rel="stylesheet" type="text/css" />
</head>

<center>
  <div class="text">
	<h1>Old Text</h1>
    <?php echo $_SESSION['Deliverypage']['words']; ?>
  </div>
  <div class="change">
    <form action="index.php?page=application/BackPages/Words/editDeliverypageconfirm" method="post">
      <textarea name="words" rows="10" cols="30"><?php echo $_SESSION['Deliverypage']['words']; ?></textarea></br>
      <input type="submit" style="margin-top:10px" name="update" value="Update" />
    </form>
  </div>
</center>