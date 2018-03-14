  <div class="textbox">
    <div class="qbox">
      <center>
        <QHeavy>
          Fill this out and we will get a hold of you as soon as possble
        </QHeavy>
      </center>
      <form method="post" action="index.php?page=application/Email/DeliveryQuestionnaireMail" enctype="multipart/form-data">

        <center>
          <br>
            <QLight>
              Your Email: <input type="email" name="email" required=""/>
            </QLight>
          </br>
        </center>
        <center>
          <div class="column">
            <QHeavy>
              <br>
                PickUp
              </br>
            </QHeavy>
            <QLight>
              <input type="text" placeholder="First/Last Name Or Company" name="Pname" size="35" required=""/>
            </QLight>
            <QLight>
              <input type="text" placeholder="Phone Number" name="Pnumber" min="10" maxlength="14" size="14"/>
            </QLight>

            <QLight>
              <input type="date"  name="Pdate" />
              <input type="time"  name="Ptime" />
            </QLight>
            <br>
              <QLight>
                <input type="text" placeholder="Street"  name="PStreet" />
              </QLight>
            </br>
            <QLight>
              <input type="text" placeholder="Apt/Suite number" name="PaddNumber" size="11" />

              <input type="text" placeholder="Zip" name="Pzip" min="5" maxlength="5" size="6"  />
            </QLight>
            <br>
              <QLight>
                Comments:
              </QLight>
            </br>
            <textarea name="Pcomments" rows="5" cols="30">
            </textarea>

          </div>
          <div class="column">
            <QHeavy>
              <br>
                DropOff
              </br>
            </QHeavy>
            <QLight>
              <input type="text" placeholder="First/Last Name Or Company" name="Dname" size="35" />
            </QLight>
            <QLight>
              <input type="text" placeholder="Phone Number" name="Dnumber" min="10" maxlength="14" size="14" />
            </QLight>
            <QLight>
              <input type="date"  name="Ddate" />
              <input type="time"  name="Dtime" />

            </QLight>
            <br>
              <QLight>
                <input type="text" placeholder="Street"  name="DStreet" />
              </QLight>
            </br>
            <QLight>
              <input type="text" placeholder="Apt/Suite number" name="DaddNumber" size="11" />
              <input type="text" placeholder="Zip" name="Dzip" min="5" maxlength="5" size="6"  />
            </QLight>
            <br>
              <QLight>
                Comments:
              </QLight>
            </br>
            <textarea name="Dcomments" rows="5" cols="30">
            </textarea>
          </div>
        </center>
        <center>
          <br>
            <QHeavy>Talk about the thing we are deliving</QHeavy>
          </br>
          <br>
            <QLight>What is it: </QLight>
          </br>
          <div class="PhoneNoShow">
            <textarea name="itIs" rows="10" cols="80">
            </textarea>
          </div>
          <div class="PhoneShow">
            <textarea name="itIs1" rows="5" cols="30">
            </textarea>
          </div>

        </center>
        <center>
          <QHeavy> We will get back to you once we went though your questins.  </QHeavy>
          <br>
            <input  style="height:50px; width:100px"   type="submit" name="submit" value="Submit" />
          </br>
        </center>

      </form>
    </div>
  </div>
