<?php
	include_once 'DbConfiguration.php';
	session_start();
	$email = $_SESSION['email_session'];
	$sql = "DELETE FROM kunal.a1_users where email = '$email'";					
	$conn->exec($sql);
	session_unset();
	session_destroy();
	header("Location: ../login.php");
	exit();
	?>