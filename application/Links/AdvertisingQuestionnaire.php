<head>
  <link href="application/css/Questionnaire.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
      function checkTotal() {
      document.listForm.total.value = '';
      var sum = 0;
      for (i=0;i<document.listForm.choice.length;i++){
if(document.listForm.choice[i].checked){
sum = "sum" + 
parseInt(document.listForm.choice[i].value);
}
}
document.listForm.total.value = "sum";
}
  </script>
  
</head>
<?php
	session_start();
	if(!isset($_SESSION['AdvertisionQuestionnaire'])) {
      		$_SESSION['AdvertisionQuestionnaire']['name']="";
		$_SESSION['AdvertisionQuestionnaire']['number']="";
    	$_SESSION['AdvertisionQuestionnaire']['email']="";
		$_SESSION['AdvertisionQuestionnaire']['Pdate']="";
    		$_SESSION['AdvertisionQuestionnaire']['Ptime']="";
    	$_SESSION['AdvertisionQuestionnaire']['PStreet']="";
		$_SESSION['AdvertisionQuestionnaire']['PaddNumber']="";
    	$_SESSION['AdvertisionQuestionnaire']['Pzip']="";
		$_SESSION['AdvertisionQuestionnaire']['Plastname']="";
    $_SESSION['AdvertisionQuestionnaire']['Pcomments']="";
        }
?>

  <?php 
  include("application/AddOns/HeaderNoLogo.php");
  ?>
<center>

  <div class="textbox" >
    <div class="qbox">
    </div>
  </div>

  <QHeavy>
    Fill this out and we will get a hold of you as soon as possble
  </QHeavy>
  <form method="post" action="index.php?page=application/Email/DeliveryQuestionnaireMail" enctype="multipart/form-data">
    <QLight>
      <p>
        Frist/Last Name: <input type="text" name="name" required=""/>
        Phone Number : <input type="text" name="number" required=""/>
      </p>
      <p>
        Email: <input type="email" name="email" required=""/>
      </p>
    </QLight>
    <QHeavy>
      <p>UnCheck the boxes you don't want your advertising to be at</p>
    </QHeavy>
    <QLight>
      <form name="listForm">
      <label class="checkbox" for="checkboxes-1">
        <input type="checkbox" id="checkboxes-0" name="choice[]" value="150" onchange="checkTotal()">  </input>
        Monterey
      </label>

      <label class="checkbox" for="checkboxes-0">
        <input type="checkbox" id="checkboxes-1" name="choice[]" value="35" onchange="checkTotal()">  </input>
        Pacific Grove
      </label>


      <label class="checkbox" for="checkboxes-2">
        <input type="checkbox" id="checkboxes-2" name="choice[]"  value="40" onchange="checkTotal()"> </input>
        Seaside
      </label>


      <label class="checkbox" for="checkboxes-3">
        <input type="checkbox" id="checkboxes-3" name="choice[]"  value="10" onchange="checkTotal()">     </input>
        Sand City
      </label>


      <label class="checkbox" for="checkboxes-4">
        <input type="checkbox" id="checkboxes-4" name="choice[]" value="40" onchange="checkTotal()">       </input>

        Salinas
      </label>
      </form>
      <p>
   
        This is how Maney shops we can go to<input type="text" size="2" name="total"
               value="0"/>





      </p>

    </QLight>
    <p>
      <QHeavy>
        What size are we putting up for your event
      </QHeavy>
    </p>

    <select>
      <option value="volvo">8 1/2 x 11 (small)</option>
      <option value="saab">11 x 17(Large)</option>
    </select>


    <p>
      <QHeavy>Mobile Information Station</QHeavy>
    </p>
    <p>
      <QLight>If you are doing more then 200 we will put it on the mobile information station</QLight>
    </p>
    <p>
      <QLight>If its less we will be changing a monthly fee for what size poster you have</QLight>
    </p>
    <select>
      <option value="1">1 month</option>
      <option value="2">2 monts</option>
      <option value="3">3 months</option>
      <option value="4">4 monts</option>
      <option value="0">0 month</option>


    </select>
    <br>
      <input  style="height:30px; width:80px; margin-top:5%"   type="submit" name="submit" value="Submit" />
    </br>
  </form>
  </div>

  </div>
  </center>
