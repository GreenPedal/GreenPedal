<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(isset($_GET['ID'])) {
		$_SESSION['editwhereweoffer']['ID']=$_GET['ID'];
	}
	if(!isset($_SESSION['editwhereweoffer']['name'])) {
		$whereweoffer_sql="SELECT * FROM whereweoffer WHERE ID=".$_GET['ID'];
		$whereweoffer_query=mysqli_query($dbconnect, $whereweoffer_sql);
		$whereweoffer_rs=mysqli_fetch_assoc($whereweoffer_query);
		$_SESSION['editwhereweoffer']['name']=$whereweoffer_rs['name'];
	}
?>
<center>

  <div class="text">
<form action="index.php?page=where/editwhereconfirm" method="post">
  <textarea name="name" rows="1" cols="20"> <?php echo $_SESSION['editwhereweoffer']['name']; ?> </textarea>
  <input type="submit" name="update" value="Update" />
</form>
</div>
  </center>