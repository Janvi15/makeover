<?php  
	
	include 'Connection.php';

	$chkb1 = $chkb2 = $chkb3 = $chkb4 = $chkb5 = "0";

	$time = $_POST['dateTime'];

  date_default_timezone_set('Asia/Kolkata');

	$time = date('Y-m-d H:i:s');

	//$facility = $_POST['fac'];
	$amount = $_POST['amount'];

	$chkb1 = $_POST['chkb1'];
          // echo "$chkb1";
    $chkb2 = $_POST['chkb2'];
         // echo "$chkb2";
    $chkb3 = $_POST['chkb3'];
          //echo "$chkb3";
    $chkb4 = $_POST['chkb4'];
          //echo "$chkb4";
    $chkb5 = $_POST['chkb5'];
          //echo "$chkb5";
    $allServices = "$chkb1 | $chkb2 | $chkb3 | $chkb4 | $chkb5";

    setcookie("time",$time,time()+3600,"/"," ","0");
    setcookie("amount",$amount,time()+3600,"/"," ","0");
    setcookie("facilities",$allServices,time()+3600,"/"," ","0");

    header("Location:confirm.php");    
?>