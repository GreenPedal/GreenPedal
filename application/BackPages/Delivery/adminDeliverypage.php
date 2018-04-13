<?php
	include("application/DBConnect/dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	unset($_SESSION['editadvertising']);
	
	$what_sql="SELECT * FROM whatweoffer";
	$what_query=mysqli_query($dbconnect, $what_sql);
	$what_rs=mysqli_fetch_assoc($what_query);
  
  	unset($_SESSION['editwhat']);
	
	$advertising_sql="SELECT * FROM advertising";
	$advertising_query=mysqli_query($dbconnect, $advertising_sql);
	$advertising_rs=mysqli_fetch_assoc($advertising_query);

	unset($_SESSION['editwords']);
	
	$words_sql="SELECT * FROM words";
	$words_query=mysqli_query($dbconnect, $words_sql);
	$words_rs=mysqli_fetch_assoc($words_query);
?>
<center>
  <?php  include("header.php");?>
<div class="text">
  <?php do { ?>
  <p>
    <a href="index.php?page=words/editwords&words_ID=
      
      <?php echo $words_rs['words_ID']; ?>"><?php echo $words_rs['name']; ?>
    </a>
  </p>
  


  <?php
	} while ($words_rs=mysqli_fetch_assoc($words_query)) ?>
</div>
    <div class="text">
<h1>Event Page</h1>
  <p>
    <a href="index.php?page=what/what">What</a>
  </p>
  <p>
    <a href="index.php?page=where/where">Where</a>
  </p>
  <p>
    <a href="index.php?page=advertising/advertising">Advertising</a>
  </p>
 
</div>
</center>
