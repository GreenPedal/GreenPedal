<?php
	include("application/DBConnect/dbconnect.php");
session_start();
if(!isset($_SESSION['admin'])) {
header("Location:index.php");
}
if(isset($_GET['words_ID'])) {
$_SESSION['frontpage']['words_ID']=$_GET['words_ID'];
}
if(!isset($_SESSION['frontpage']['words'])) {
$frontpage_sql="SELECT * FROM frontpage WHERE words_ID=".$_GET['words_ID'];
$frontpage_query=mysqli_query($dbconnect, $frontpage_sql);
$frontpage_rs=mysqli_fetch_assoc($frontpage_query);
$_SESSION['frontpage']['words']=$frontpage_rs['words'];
}
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
  <link href="application/BackPages/css/style.css" rel="stylesheet" type="text/css" />
</head>

<center>
  <div class="text">
	<h1>Old Text</h1>
    <?php echo $_SESSION['frontpage']['words']; ?>
  </div>
  <div class="change">
       <form action="index.php?page=application/BackPages/Words/editfrontpageconfirm" method="post">
         <textarea name="words" rows="10" cols="30"><?php echo $_SESSION['frontpage']['words']; ?></textarea></br>
         <input type="submit" style="margin-top:10px" name="update" value="Update" />
       </form>
  </div>
</center>