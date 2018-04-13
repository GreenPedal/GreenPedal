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
<center>
<div class="text">
  <form action="index.php?page=EventPage/editEventPageconfirm" method="post">
    <textarea name="words" rows="10" cols="30">
      <?php echo $_SESSION['editEventPage']['words']; ?>
    </textarea>
    <input type="submit" name="update" value="Update" />
  </form>
</div>
</center>