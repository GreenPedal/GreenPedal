 <div class="proCon">
     <center>
	    <div class="buslogo">
           <img class="BusImages" src="images/BusinessesPics/<?php echo $_SESSION['Businesses']['Pic']; ?>"/> </img>
        </div>
	    <div class="sosbox">
           <?php do { ?> 
		   <a href="<?php echo $BUS_rs['SoWeb']; ?>"/>
            <img class="sosimage" src="images/SocialMedia/<?php echo $BUS_rs ['SoPic']; ?>" /></img>
           </a>
           <a href="
             <?php echo $BUS_rs['SoWeb']; ?>"/>
              <?php
	           } while ($BUS_rs=mysqli_fetch_assoc($BUS_query)) 
              ?>
           </a>
        </div>
      </center>
     <div class="beContainer">
       <div class="motto">
          <center>
            <?php echo $_SESSION['Businesses']['motto']; ?>
          </center>
       </div>
	   <div class="PhoneNoShow">
         <div class="busAbout">
             <?php echo $_SESSION['Businesses']['about']; ?>
         </div>
	   </div>
     </div>
	 <center>
         <div class="buttonclass">
            <a href="index.php?page=application/Links/category&Bus_ID=
               <?php echo $Businesses_rs['Bus_ID']; ?>">
               <input class="button" type="submit" name="Menu" value="Menu"/>
            </a>
            <a href="
               <?php echo $_SESSION['Businesses']['website']; ?>"/>
               <input class="button" type="submit" name="Order Now" value="Order Now"/>
            </a>
         </div>
    </center>
</div>



