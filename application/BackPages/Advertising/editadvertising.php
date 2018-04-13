<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	if(isset($_GET['ID'])) {
		$_SESSION['editadvertising']['ID']=$_GET['ID'];
	}
	if(!isset($_SESSION['editadvertising']['words'])) {
		$advertising_sql="SELECT * FROM advertising WHERE ID=".$_GET['ID'];
		$advertising_query=mysqli_query($dbconnect, $advertising_sql);
		$advertising_rs=mysqli_fetch_assoc($advertising_query);
		$_SESSION['editadvertising']['words']=$advertising_rs['words'];
	}
?>
<center>

  <div class="text">
    <form action="index.php?page=advertising/editadvertisingconfirm" method="post">
  <textarea name="words" rows="10" cols="30"> <?php echo $_SESSION['editadvertising']['words']; ?> </textarea>
  <input type="submit" name="update" value="Update" />
</form>
</div>
</center>
