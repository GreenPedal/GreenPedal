<body>
<center>
  <div class="text">
      <div class="Cbox">
        <br>
<h1>Phone Number</h1>
<p>(831)920-8181</p>
        </br>
</div>
    <form method="post" action="index.php?page=application/Email/EmailUs" enctype="multipart/form-data">  
      <div class="text">
        <br>
    <h1>Email Us</h1>
        </br>
        <br>
    <p>
      Email: <input type="email" name="email" required=""/>
      Name: <input type="text" name="name" required=""/>
    </p>
        </br>
        <br>
    <p>
      Subject: <input type="text" name="Subject" required=""/>
    </p>
        </br>
    <textarea
      name="body" rows="10" cols="70">
    </textarea>
        <br>
    <p>
    <input style="height:30px; width:100px;"  type="submit" name="Send  Message" value="Send  Message"  />
      </p>
        </br>
  </div>
      <div Style="margin-bottom:auto;">
        <?php include("application/AddOns/footer.php"); ?>
      </div>

    </form>
    </div>
  </center>


