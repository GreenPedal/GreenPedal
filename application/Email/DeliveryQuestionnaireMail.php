	<?PHP
  
  session_start();
	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php?page=application/Links/ThatYou");
	}  
  
  	if(isset($_POST['submit'])) {
    
      		$_SESSION['DeliveryQuestionnaire']['email']=$_POST['email'];
          //PickUp
		$_SESSION['DeliveryQuestionnaire']['Pname']=$_POST['Pname'];
     	$_SESSION['DeliveryQuestionnaire']['Pnumber']=$_POST['Pnumber'];
		$_SESSION['DeliveryQuestionnaire']['Ptime']=$_POST['Ptime'];
		$_SESSION['DeliveryQuestionnaire']['Pdate']=$_POST['Pdate'];
    	$_SESSION['DeliveryQuestionnaire']['PStreet']=$_POST['PStreet'];
		$_SESSION['DeliveryQuestionnaire']['PaddNumber']=$_POST['PaddNumber'];
    	$_SESSION['DeliveryQuestionnaire']['Pzip']=$_POST['Pzip'];
		$_SESSION['DeliveryQuestionnaire']['Plastname']=$_POST['Plastname'];
    $_SESSION['DeliveryQuestionnaire']['Pcomments']=$_POST['Pcomments'];
    //DropOff
    	$_SESSION['DeliveryQuestionnaire']['Dname']=$_POST['Dname'];
    	$_SESSION['DeliveryQuestionnaire']['Dnumber']=$_POST['Dnumber'];
		$_SESSION['DeliveryQuestionnaire']['Dtime']=$_POST['Dtime'];
		$_SESSION['DeliveryQuestionnaire']['Ddate']=$_POST['Ddate'];
    	$_SESSION['DeliveryQuestionnaire']['DStreet']=$_POST['DStreet'];
		$_SESSION['DeliveryQuestionnaire']['DaddNumber']=$_POST['DaddNumber'];
    	$_SESSION['DeliveryQuestionnaire']['Dzip']=$_POST['Dzip'];
		$_SESSION['DeliveryQuestionnaire']['Dlastname']=$_POST['Dlastname'];
    $_SESSION['DeliveryQuestionnaire']['Dcomments']=$_POST['Dcomments'];
        $_SESSION['DeliveryQuestionnaire']['itIs']=$_POST['itIs'];
    }
     $email .= $_POST['email'] . "\n";
    //PickUp
 $Pname .= $_POST['Pname'] . "\n";
 $Pnumber .= $_POST['Pnumber'] . "\n";
$Ptime .= $_POST['Ptime'] . "\n";
$Pdate .= $_POST['Pdate'] . "\n";
 $PStreet .= $_POST['PStreet'] . "\n";
$PaddNumber .= $_POST['PaddNumber'] . "\n";
 $Pzip .= $_POST['Pzip'] . "\n";
 $Pcomments .= $_POST['Pcomments'] . "\n";
 //DropOff
  $Dname .= $_POST['Dname'] . "\n";
 $Dnumber .= $_POST['Dnumber'] . "\n";
$Dtime .= $_POST['Dtime'] . "\n";
$Ddate .= $_POST['Ddate'] . "\n";
 $DStreet .= $_POST['DStreet'] . "\n";
$DaddNumber .= $_POST['DaddNumber'] . "\n";
 $Dzip .= $_POST['Dzip'] . "\n";
 $Dcomments .= $_POST['Dcomments'] . "\n";
  $itIs .= $_POST['itIs'] . "";
  
  include("application/Email/Mail.php");

$DisMessage = '<html><body><center>';
$DisMessage .= '<p>';
$DisMessage .=$email ;
$DisMessage .= '</p>';
$DisMessage .= '<h1>Picking UP From</h1>';
$DisMessage .= '<p>';
$DisMessage .=$Pname ;
$DisMessage .=$Pnumber ;
$DisMessage .= '</p>';
$DisMessage .= '<p>';
$DisMessage .=$Ptime ;
$DisMessage .=$Pdate ;
$DisMessage .= '</p>';
$DisMessage .= '<p>';
$DisMessage .=$PStreet ;
$DisMessage .= '</p>';
$DisMessage .= '<p>';
$DisMessage .=$PaddNumber ;
$DisMessage .=$Pzip ;
$DisMessage .= '</p>';
$DisMessage .= '<p>';
$DisMessage .=$Pcomments ;
$DisMessage .= '</p>';
$DisMessage .= '<h1>Dropping Off At</h1>';
$DisMessage .= '<p>';
$DisMessage .=$Dname ;
$DisMessage .=$Dnumber ;
$DisMessage .= '</p>';
$DisMessage .= '<p>';
$DisMessage .=$Dtime ;
$DisMessage .=$Ddate ;
$DisMessage .= '</p>';
$DisMessage .= '<p>';
$DisMessage .=$DStreet ;
$DisMessage .= '</p>';
$DisMessage .= '<p>';
$DisMessage .=$DaddNumber ;
$DisMessage .=$Dzip ;
$DisMessage .= '</p>';
$DisMessage .= '<p>';
$DisMessage .=$Dcomments ;
$DisMessage .= '</p>';
$DisMessage .= '<h1>The Package</h1>';
$DisMessage .= '<p>';
$DisMessage .=$itIs ;
$DisMessage .=$itIs1 ;
$DisMessage .= '</p>';
$DisMessage .= '</body></html></center>';


$clmessage = '<html><body><center>';
$clmessage .= '<h1>Picking UP From</h1>';
$clmessage .= '<p>';
$clmessage .=$Pname ;
$clmessage .=$Pnumber ;
$clmessage .= '</p>';
$clmessage .= '<p>';
$clmessage .=$Ptime ;
$clmessage .=$Pdate ;
$clmessage .= '</p>';
$clmessage .= '<p>';
$clmessage .=$PStreet ;
$clmessage .= '</p>';
$clmessage .= '<p>';
$clmessage .=$PaddNumber ;
$clmessage .=$Pzip ;
$clmessage .= '</p>';
$clmessage .= '<p>';
$clmessage .=$Pcomments ;
$clmessage .= '</p>';
$clmessage .= '<h1>Dropping Off At</h1>';
$clmessage .= '<p>';
$clmessage .=$Dname ;
$clmessage .=$Dnumber ;
$clmessage .= '</p>';
$clmessage .= '<p>';
$clmessage .=$Dtime ;
$clmessage .=$Ddate ;
$clmessage .= '</p>';
$clmessage .= '<p>';
$clmessage .=$DStreet ;
$clmessage .= '</p>';
$clmessage .= '<p>';
$clmessage .=$DaddNumber ;
$clmessage .=$Dzip ;
$clmessage .= '</p>';
$clmessage .= '<p>';
$clmessage .=$Dcomments ;
$clmessage .= '</p>';
$clmessage .= '<h1>The Package</h1>';
$clmessage .= '<p>';
$clmessage .=$itIs ;
$clmessage .=$itIs1 ;
$clmessage .= '</p>';
$clmessage .= '</body></html></center>';

$DisMail->Subject = 'Delivery';
$DisMail->AltBody = $DisMessage;
$DisMail->Body = $DisMessage;

$Text->Subject = 'Check Email';
$Text->AltBody = 'Mikey Got A Delivery';
$Text->Body = 'Mikey Got A Delivery';

$DClmail->addAddress($email);
$DClmail->Subject = 'Do not Replay';
$DClmail->AltBody = $clmessage;
$DClmail->Body = $clmessage;


 //$Text->send();
 $DClmail->send();
// $DisMail->send();



?>
