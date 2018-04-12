<!DOCTYPE html>
<html >
  <body>
   <div style="width:50%;float:left;padding:10;">
    <div style="width:50%;float:left;">
     <div style="color:green">First Name<span>*</span></div>
     <textarea type="email" cols="10" name="email"/><?php echo $first_name;?></textarea>
    </div>
    <div style="width:50%;float:left;">
     <div style="color:green">Last Name<span>*</span></div>
     <textarea type="email" cols="10" name="email"/><?php echo $last_name;?></textarea>
    </div>
    <div style="width:100%">
     <div style="color:green">Email<span>*</span></div>
     <textarea type="email" cols="10" name="email"/><?php echo $email;?></textarea>
    </div>
   </div>
   <div style="width:50%;float:left;padding:10;">
     Addresses

      <?php do { ?>
		<center>
		  <?php echo $addresses_rs['addresses']; ?>
		</center>
	<?php } while ($addresses_rs=mysqli_fetch_assoc($addresses_query)) ?>




   </div>
  </body>
</html>
