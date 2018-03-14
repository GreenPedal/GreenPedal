<center>
  <?php  include("header.php");?>

  <div class="text">

    <form action="index.php?page=admin" method="post">
	<p>Name:<input name="Name" /></p>
	<p>Password:<input name="Password" type="Password" /></p>
	<?php
	if(isset($_GET['error'])) {
		echo "Incorrect Name or Password";
	}
	
	?>
	<p><input type="submit" name="login" /></p>
</form>
</div>
</center>
