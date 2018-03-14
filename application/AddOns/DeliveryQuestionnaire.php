<?php
	session_start();
	if(!isset($_SESSION['DeliveryQuestionnaire'])) {
      		$_SESSION['DeliveryQuestionnaire']['email']="";
		$_SESSION['DeliveryQuestionnaire']['Pname']="";
    	$_SESSION['DeliveryQuestionnaire']['Pnumber']="";
		$_SESSION['DeliveryQuestionnaire']['Pdate']="";
    		$_SESSION['DeliveryQuestionnaire']['Ptime']="";
    	$_SESSION['DeliveryQuestionnaire']['PStreet']="";
		$_SESSION['DeliveryQuestionnaire']['PaddNumber']="";
    	$_SESSION['DeliveryQuestionnaire']['Pzip']="";
		$_SESSION['DeliveryQuestionnaire']['Plastname']="";
    $_SESSION['DeliveryQuestionnaire']['Pcomments']="";
    
    	$_SESSION['DeliveryQuestionnaire']['Dname']="";
    	$_SESSION['DeliveryQuestionnaire']['Dnumber']="";
      		$_SESSION['DeliveryQuestionnaire']['Ddate']="";
		$_SESSION['DeliveryQuestionnaire']['Dtime']="";
    	$_SESSION['DeliveryQuestionnaire']['DStreet']="";
		$_SESSION['DeliveryQuestionnaire']['DaddNumber']="";
    	$_SESSION['DeliveryQuestionnaire']['Dzip']="";
		$_SESSION['DeliveryQuestionnaire']['Dlastname']="";
    $_SESSION['DeliveryQuestionnaire']['Dcomments']="";
    }
?>
