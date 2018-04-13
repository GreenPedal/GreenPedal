<?php
	include("application/DBConnect/dbconnect.php");
session_start();
if(!isset($_SESSION['admin'])) {
header("Location:index.php");
}
if(isset($_GET['words_ID'])) {
$_SESSION['editfrontpage']['words_ID']=$_GET['words_ID'];
}
if(!isset($_SESSION['editfrontpage']['words'])) {
$frontpage_sql="SELECT * FROM frontpage WHERE words_ID=".$_GET['words_ID'];
$frontpage_query=mysqli_query($dbconnect, $frontpage_sql);
$frontpage_rs=mysqli_fetch_assoc($frontpage_query);
$_SESSION['editfrontpage']['words']=$frontpage_rs['words'];
}
?>
<center>
<div class="text">
  <form action="index.php?page=frontpage/editfrontpageconfirm" method="post">
    <textarea name="words" rows="10" cols="30">
    <?php echo $_SESSION['editfrontpage']['words']; ?></textarea>
    <input type="submit" name="update" value="Update" />
  </form>
</div>
</center>