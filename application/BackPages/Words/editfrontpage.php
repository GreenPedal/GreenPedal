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
  <link href="application/css/Profiles.css" rel="stylesheet" type="text/css" />
      <?php
      include 'css/css.html'; 
    ?>
</head>

<center>
  <div class="form">
       <h1>Old Text</h1>
       <greentext> <?php echo $_SESSION['frontpage']['words']; ?></greentext>
       <form action="index.php?page=application/BackPages/Words/editfrontpageconfirm" method="post">
         <textarea style="margin-top:10px;height:auto;" name="words" rows="10" ><?php echo $_SESSION['frontpage']['words']; ?></textarea></br>
         <button type="submit" class="button button-block" name="update" value="Update">Update</button></br>
       </form>
	   <button onclick="history.go(-1);" style="margin-top:8px;" class="button button-block">Back</button>
   </div>
</center>