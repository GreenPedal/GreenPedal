<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	unset($_SESSION['editwhatweoffer']);
	
	$whatweoffer_sql="SELECT * FROM whatweoffer";
	$whatweoffer_query=mysqli_query($dbconnect, $whatweoffer_sql);
	$whatweoffer_rs=mysqli_fetch_assoc($whatweoffer_query);
?>
<center>
  <?php  include("header.php");?>

  <div class="text">
    <?php do { ?>
<p><a href="index.php?page=what/editwhat&ID=
    <?php echo $whatweoffer_rs['ID']; ?>"><?php echo $whatweoffer_rs['name']; ?></a></p>
</p>
 

<?php
	} while ($whatweoffer_rs=mysqli_fetch_assoc($whatweoffer_query)) ?>
  <p>
    <a href="index.php?page=what/addwhat">Add What We Offer</a>
    <p>
      <a href="index.php?page=what/deletewhatselect">Delete What We Offer</a>
    </p>
  </p>
</div>
</center>
