<?php
	include("application/DBConnect/dbconnect.php");
session_start();
if(!isset($_SESSION['admin'])) {
header("Location:index.php");
}
if(isset($_GET['ID'])) {
$_SESSION['editEventPage']['ID']=$_GET['ID'];
}
if(!isset($_SESSION['editEventPage']['words'])) {
$EventPage_sql="SELECT * FROM eventpage
 WHERE ID=".$_GET['ID'];
$EventPage_query=mysqli_query($dbconnect, $EventPage_sql);
$EventPage_rs=mysqli_fetch_assoc($EventPage_query);
$_SESSION['editEventPage']['words']=$EventPage_rs['words'];
}
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
  <link href="application/BackPages/css/style.css" rel="stylesheet" type="text/css" />
</head>

<center>
  <div class="text">
	<h1>Old Text</h1>
    <?php echo $_SESSION['editEventPage']['words']; ?>
  </div>

<div class="change">
  <form action="index.php?page=application/BackPages/Words/editEventPageconfirm" method="post">
    <textarea name="words" rows="10" cols="30"><?php echo $_SESSION['editEventPage']['words']; ?></textarea></br>
    <input type="submit" style="margin-top:10px"  name="update" value="Update" />
  </form>
</div>
</center>