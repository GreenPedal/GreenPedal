<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	unset($_SESSION['editwhereweoffer']);
	
	$whereweoffer_sql="SELECT * FROM whereweoffer";
	$whereweoffer_query=mysqli_query($dbconnect, $whereweoffer_sql);
	$whereweoffer_rs=mysqli_fetch_assoc($whereweoffer_query);
?>
<center>

  <div class="text">
<?php do { ?>
<p><a href="index.php?page=where/editwhere&ID=
  
  
    
    <?php echo $whereweoffer_rs['ID']; ?>"><?php echo $whereweoffer_rs['name']; ?></a></p>
</p>
 

<?php
	} while ($whereweoffer_rs=mysqli_fetch_assoc($whereweoffer_query)) ?>
  <p>
    <a href="index.php?page=where/addwhere">Add Where We Offer</a>
    <p>
      <a href="index.php?page=where/deletewhereselect">Delete Where We Offer</a>
    </p>
  </p>
</div>
</center>
