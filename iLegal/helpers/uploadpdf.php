<?php 
	session_start();
	$file = $_POST["pdf"];
	include("../templates/database-connector.php");
	$sql = $conn->prepare("INSERT INTO `filled_pdfs`(`PDFTitle`, `UniqueIDOfUser`, `Filepath`) VALUES (?, ?, ?);");
	$sql->bind_param('sss', $file, $_SESSION['ID'], $file);
    $sql->execute();
    header("Location: ../saved.php");
?>