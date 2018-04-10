<!DOCTYPE html>
<html>
  <head>
    <link href="application/css/ContactInfo.css" rel="stylesheet" type="text/css" />
    <?php  include("application/AddOns/Header.php");?>
    <?php  include("application/AddOns/EmailUs.php");?>
  </head>
  <body>
    <form method="post" action="index.php?page=application/Email/EmailUs" enctype="multipart/form-data">
      <center>
        <div class="text">
          <div class="Cbox">
            <br>
              <h1>Email Us</h1>
            </br>
            <p>
              Email: <input type="email" name="email" required=""/>
              Name: <input type="text" name="name" required=""/>
            </p>

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
                <input style="height:30px; width:100px;"  type="submit" name="send" value="Send  Message" />
              </p>
            </br>
          </div>
        </div>
      </center>
    </form>
  </body>
</html>




