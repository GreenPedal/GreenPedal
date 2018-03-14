<?php
	include("application/DBConnect/dbconnect.php");
?>
<html>
<head>
<title>GreenPedal831</title>
<link href="application/css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

    

      <?php 
		if(!isset($_GET['page'])) {
			include("application/FrontPages/HomePage.php");
		} else {
			$page=$_GET['page'];
			include("$page.php");
		}
	  
	  ?>
 </div><!-- Container ends here-->
</body>
</html>
