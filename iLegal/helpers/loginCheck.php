<?php 
	session_start();
	session_unset();
	$email = $_POST['loginEmail'];
	$pass = $_POST['loginPassword'];

	include("../templates/database-connector.php");

	$sql = $conn->prepare("SELECT * FROM user WHERE Email = ? AND Password = ?;");
  $sql->bind_param('ss', $email, $pass);
  $sql->execute();
  $ans = $sql->get_result();
  $row = $ans->fetch_assoc();

	if(!empty($row)){
		$_SESSION["email"] = $email;
		$_SESSION["ID"] = $row['Id'];
		header("Location: ../index.php");
	}else{
		header("Location: ../login.php?fail=true");
	}
?>