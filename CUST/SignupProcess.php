<?php
	include 'Connection.php';

	if (isset($_POST['btnSignup'])) {
	 	$Fname = $_POST['CFname'];
	 	$Lname = $_POST['CLname'];
	 	$psw = $_POST['CPsw'];
	 	$PNo = $_POST['CPNo'];
	 	$Email = $_POST['CEmail'];

	 	$sql = "INSERT INTO customer_detail (`C_Email`, `C_Fname`, `C_Lname`, `C_Password`, `C_PhoneNo`) VALUES ('$Email', '$Fname', '$Lname', '$psw', '$PNo')";

	 	$result = $conn->query($sql);

	 	if ($result === TRUE) {
	 		echo "Successfully inserted";
	 		header("Location:home.php");

	 	}else{
	 		echo "ERROR!!!";
	 	}

	 }elseif (isset($_POST['SignIn'])) {
	 	
	 	$email = $_POST['LEmail'];
	 	$psw = $_POST['LPsw'];

	 	$sql = "SELECT * FROM customer_detail WHERE C_Email = '$email' AND C_Password = '$psw' ";
	 	$result = $conn->query($sql);

	 	if ($result->num_rows > 0) {
	 		echo "Successfully Logged in";
	 		header("Location:index.php");
	 	}else{
	 		echo "Not Logged in";
	 	}
	 }else{
	 	echo "You are on wrong page";
	 }

	 //For SignIn

	 

?>