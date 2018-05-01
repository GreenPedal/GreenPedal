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
  <link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />
      <?php
      include 'css/css.html'; 
    ?>
</head>

<center>
  <div class="form">
	<h1>Old Text</h1>
    <greentext> <?php echo $_SESSION['editEventPage']['words']; ?></greentext> 
  <form action="index.php?page=application/BackPages/Words/editEventPageconfirm" method="post">
    <textarea style="margin-top:10px;height:auto;" name="words" rows="10" cols="30"><?php echo $_SESSION['editEventPage']['words']; ?></textarea></br>
    <button type="submit" class="button button-block"  name="update" value="Update">UpDate</button>
  </form>
	   <button onclick="history.go(-1);" style="margin-top:8px;" class="button button-block">Back</button>
</div>
</center>