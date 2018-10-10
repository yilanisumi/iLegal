<?php 
	session_start();
	session_unset();
	$email = $_POST['signupEmail'];
	$pass = $_POST['signupPassword'];
	$firstname = $_POST['signupFirstName'];
	$midname = $_POST['signupMiddleName'];
	$lastname = $_POST['signupLastName'];
	
	include("../templates/database-connector.php");

	$sql = $conn->prepare("SELECT * FROM user WHERE Email = ?;");
  $sql->bind_param('s', $email);
  $sql->execute();
  $ans = $sql->get_result();
  $row = $ans->fetch_assoc();

  echo $pass;

	if(empty($row)){
		$sql = $conn->prepare("INSERT INTO `user` (`FirstName`,`LastName`, `MiddleName`, `Email`, `Password`) VALUES (?, ?, ?, ?, ?);");
    $sql->bind_param('sssss', $firstname, $lastname, $midname, $email, $pass);
    $sql->execute();
    $sql = $conn->prepare("SELECT * FROM user WHERE Email = ? AND Password = ?;");
	  $sql->bind_param('ss', $email, $pass);
	  $sql->execute();
	  $ans = $sql->get_result();
	  $row = $ans->fetch_assoc();
    $_SESSION["email"] = $row['Email'];
    $_SESSION["ID"] = $row['Id'];
  	header("Location: ../index.php");
	}else{
		header("Location: ../signup.php?fail=true");
	}
?>