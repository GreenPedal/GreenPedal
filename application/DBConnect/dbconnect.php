<?php
	$dbconnect = mysqli_connect("localhost", "root", "", "GreenPedal");
	if(mysqli_connect_errno()) {
		echo "Connection failed:".mysqli_connect_error();
		exit;
	}

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'GreenPedal';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

?>
