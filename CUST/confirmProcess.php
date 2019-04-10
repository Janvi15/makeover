<?php

	include 'connection.php';

	$time = $_COOKIE['time'];
	$facilities = $_COOKIE['facilities'];
	$amount = $_COOKIE['amount'];

	$query = "INSERT INTO appointment_detail (`date_time`, `facility`, `amount` ) VALUES( '$time', '$facilities', '$amount')";

    $result = $conn->query($query);
    echo "appointment booked";

    header("Location:history.php");
?>