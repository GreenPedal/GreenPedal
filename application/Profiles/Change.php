<!DOCTYPE html>
<html >
  <style>
  .accordion {
    background-color: black;
    color: green;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: 1px sold white;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
  }

  .active, .accordion:hover {
    background-color: green; 
	color:white;
  }

  .panel {
    padding: 8px 18px;
    display: none;
    background-color: black;
	color:green;
    overflow: hidden;
	font-size:20px;
  }
</style>

  <body>
    <div style="width:100%;float:left;padding:30;">
	 <img  width="20%" src="images/User/<?php echo $pic; ?>"</img>
	<div/>

   <div style="width:50%;float:left;padding:10;">
    <div style="width:50%;float:left;">
     <div style="color:green">First Name<span>*</span></div>
     <textarea type="text" cols="10" name="FirstName"/><?php echo $first_name;?></textarea>
    </div>
    <div style="width:50%;float:left;">
     <div style="color:green">Last Name<span>*</span></div>
     <textarea type="text" cols="10" name="LastName"/><?php echo $last_name;?></textarea>
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
		<button class="accordion">
		<div style="float:left;width:30%">
		<?php echo $addresses_rs['Name'];?>
		</div>
		<div style="float:right;width:30%;text-align:right;">
		<?php echo "Edit";?>
		</div>
		</button>

		<div class="panel">
		   <?php echo $addresses_rs['addresses']; ?>
	    </div>
		</center>
	<?php } while ($addresses_rs=mysqli_fetch_assoc($addresses_query)) ?>
   </div>
  </body>
  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>
</html>
