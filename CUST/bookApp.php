<?php  
	
	include 'Connection.php';

	$time = $_POST['dateTime'];

  date_default_timezone_set('Asia/Kolkata');

	$time = date('Y-m-d H:i:s');

	//$facility = $_POST['fac'];
	$amount = $_POST['amount'];

  $services = $_POST['chkb'];

  $ser = implode(",",$services);

	setcookie("time",$time,time()+3600,"/"," ","0");
  setcookie("amount",$amount,time()+3600,"/"," ","0");
  setcookie("facilities",$ser,time()+3600,"/"," ","0");

  header("Location:confirm.php");    
?>