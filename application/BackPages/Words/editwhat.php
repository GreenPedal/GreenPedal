


<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	if(isset($_GET['ID'])) {
		$_SESSION['editwhatweoffer']['ID']=$_GET['ID'];
	}
	if(!isset($_SESSION['editwhatweoffer']['name'])) {
		$whatweoffer_sql="SELECT * FROM whatweoffer WHERE ID=".$_GET['ID'];
		$whatweoffer_query=mysqli_query($dbconnect, $whatweoffer_sql);
		$whatweoffer_rs=mysqli_fetch_assoc($whatweoffer_query);
		$_SESSION['editwhatweoffer']['name']=$whatweoffer_rs['name'];
	}
?>
<center>
  <?php  include("header.php");?>

  <div class="text">
    <form action="index.php?page=what/editwhatconfirm" method="post">
  <textarea name="name" rows="1" cols="20"> <?php echo $_SESSION['editwhatweoffer']['name']; ?> </textarea>
  <input type="submit" name="update" value="Update" />
</form>
</div>
</center>