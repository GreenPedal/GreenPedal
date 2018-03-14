<?php
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
 
require 'application/PHPMailer/phpmailer/phpmailer/PHPMailerAutoload.php';
 
$DClmail = new PHPMailer();
$DClmail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$DClmail->SMTPDebug   = 2;
$DClmail->DKIM_domain = '160.153.36.2';
$DClmail->Debugoutput = 'html';
$DClmail->Host        = "p3plcpnl0734.prod.phx3.secureserver.net";
$DClmail->Port        = 465;
$DClmail->Username    = "delivery@greenpedal831.com";
$DClmail->Password    = "Gr33nPedal";
$DClmail->setFrom('delivery@greenpedal831.com', 'Your Delivery');
$DClmail->SMTPAuth    = true;
$DClmail->SMTPSecure  = 'ssl';


$DisMail = new PHPMailer();
$DisMail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$DisMail->SMTPDebug   = 2;
$DisMail->DKIM_domain = '160.153.36.2';
$DisMail->Debugoutput = 'html';
$DisMail->Host        = "p3plcpnl0734.prod.phx3.secureserver.net";
$DisMail->Port        = 465;
$DisMail->SMTPAuth    = true;
$DisMail->SMTPSecure  = 'ssl';
$DisMail->Username    = "delivery@greenpedal831.com";
$DisMail->Password    = "Gr33nPedal";
$DisMail->setFrom('delivery@greenpedal831.com', 'Delivery');
$DisMail->addAddress("jamiethetec@gmail.com");
$DisMail->AddBCC("greenpedalmonterey@gmail.com");




$Text = new PHPMailer();
$Text->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$Text->SMTPDebug   = 2;
$Text->DKIM_domain = '160.153.36.2';
$Text->Debugoutput = 'html';
$Text->Host        = "p3plcpnl0734.prod.phx3.secureserver.net";
$Text->Port        = 465;
$Text->SMTPAuth    = true;
$Text->SMTPSecure  = 'ssl';
$Text->Username    = "delivery@greenpedal831.com";
$Text->Password    = "Gr33nPedal";
$Text->setFrom('delivery@greenpedal831.com');
$Text->addAddress("8315786159@txt.att.net");
$Text->AddBCC("8319208181@txt.att.net");

$con = new PHPMailer();
$con->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$con->SMTPDebug   = 2;
$con->DKIM_domain = '160.153.36.2';
$con->Debugoutput = 'html';
$con->Host        = "p3plcpnl0734.prod.phx3.secureserver.net";
$con->Port        = 465;
$con->SMTPAuth    = true;
$con->SMTPSecure  = 'ssl';
$con->Username    = "donotreplay@greenpedal831.com";
$con->Password    = "Gr33nPedal";
$con->setFrom('donotreplay@greenpedal831.com');

?>
