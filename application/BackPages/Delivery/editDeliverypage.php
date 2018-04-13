<?php
	include("application/DBConnect/dbconnect.php");
session_start();
if(!isset($_SESSION['admin'])) {
header("Location:index.php");
}
if(isset($_GET['ID'])) {
$_SESSION['editDeliverypage']['ID']=$_GET['ID'];
}
if(!isset($_SESSION['editDeliverypage']['words'])) {
$Deliverypage_sql="SELECT * FROM deliverypage
 WHERE ID=".$_GET['ID'];
$Deliverypage_query=mysqli_query($dbconnect, $Deliverypage_sql);
$Deliverypage_rs=mysqli_fetch_assoc($Deliverypage_query);
$_SESSION['editDeliverypage']['words']=$Deliverypage_rs['words'];
}
?>
<center>
<div class="text">
  <form action="index.php?page=Deliverypage/editDeliverypageconfirm" method="post">
    <textarea name="words" rows="10" cols="30">
      <?php echo $_SESSION['editDeliverypage']['words']; ?>
    </textarea>
    <input type="submit" name="update" value="Update" />
  </form>
</div>
</center>