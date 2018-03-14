
      <center>
        <div class="margin2">
        <div class="box">
          <div class="margin">
            <div class="logo">
              <img  height="100" width="200"  src="images/PagePics/GreenPedalLogo.jpg" alt="GreenPedalLogo" />
            </div>
            <div class="wordbox">
            <EP1>
              <?php echo $eventpageInfo_rs['words']; ?>
            </EP1>
            </div>
          </div>
        </div>
        </div>
      </center>


      <div class="parallax">	</div>


      <div style="background-color:black;color:white;
font-size:36px">
        <div class="margin">

          <div class="column">
              <center>
                <h1>What We Offer</h1>
                <?php do { ?>
                <p>
                  <?php echo $whatweoffer_rs['name']; ?>
                </p>
                <?php
	} while ($whatweoffer_rs=mysqli_fetch_assoc($whatweoffer_query)) ?>
              </center>
            </div>
          
            <div class="column">
              <center>
              <h1>Where We Offer</h1>
              <?php do { ?>
              <p>
                <?php echo $whereweoffer_rs['name']; ?>
              </p>
              <?php
	} while ($whereweoffer_rs=mysqli_fetch_assoc($whereweoffer_query)) ?>
              </center>
            </div>
            </div>
          </div>
        <div class="parallax1"></div>
  <div Style="margin-bottom:auto;">
    <?php include("application/AddOns/footer.php"); ?>
  </div>
