<?php 
	session_start();
	$fn = $_POST['fn'];
	$mn = $_POST['mn'];
	$ln = $_POST['ln'];
	$dob = $_POST['dob'];
	$dl = $_POST['dl'];
	$addr = $_POST['addr'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$phone = $_POST['phone'];

	include("../templates/database-connector.php");

	$sql = $conn->prepare("UPDATE user SET FirstName=?,LastName=?,MiddleName=?,DOB=?,Address1=?,City=?,ZipCode=?,PhoneNumber=?,State=?,DLNumber=? WHERE Email=?");
	$sql->bind_param("sssssssssss", $fn, $ln, $mn, $dob, $addr, $city, $zip, $phone, $state, $dl, $_SESSION['email']);
	$sql->execute();

	header("Location: ../account.php");
?>