<?PHP
  session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}  
  	if(isset($_POST['send'])) {
      		$_SESSION['Email']['email']=$_POST['email'];
		$_SESSION['Email']['name']=$_POST['name'];
     	$_SESSION['Email']['Subject']=$_POST['Subject'];
		$_SESSION['Email']['body']=$_POST['body'];
    }
     $email .= $_POST['email'] . "\n";
 $name .= $_POST['name'] . "\n";
 $Subject .= $_POST['Subject'] . "\n";
$body .= $_POST['body'] . "\n";
  
  include("Mail.php");

$DisMessage = '<html><body><center>';
$DisMessage .= '<p>';
$DisMessage .=$name ;
$DisMessage .=$email ;
$DisMessage .= '</p>';
$DisMessage .=$Subject ;
$DisMessage .= '<p>';
$DisMessage .=$body ;
$DisMessage .= '</p>';
$DisMessage .= '</body></html></center>';


$clmessage = '<html><body><center>';
$clmessage .= '<p>';
$clmessage .= '</p>';
$clmessage .=$Subject ;
$clmessage .= '<p>';
$clmessage .=$body ;
$clmessage .= '</p>';
$clmessage .= '</body></html></center>';



$DisMail->Subject = $Subject;
$DisMail->AltBody = $DisMessage;
$DisMail->Body = $DisMessage;

$con->addAddress($email);
$con->Subject = $Subject;
$con->AltBody = $clmessage;
$con->Body = $clmessage;


 ($con->send());

?>
<p>Message sent</p>


