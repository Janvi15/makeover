<?php
	
	include 'Connection.php';

	$amount = $_COOKIE['amount'];
	$date = $_COOKIE['time'];
	$facilities = $_COOKIE['facilities'];

	$query= "INSERT INTO appointment_detail (shop_id, date_time,facilities,amount) values ('11', '$date','$facilities', '$amount')";
	$ans = mysqli_query($conn, $query);

	if (!empty($ans))
	{
		header('Location: history.php');
	}

	else
	{
		die('Could not Book appointment : '. mysqli_error($conn));
	}

?>