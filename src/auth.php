<?php
error_reporting(0);
	session_start();
	include 'db.php';

	$login = $_POST['login'];
	$passwd = $_POST['passwd'];
	$action = $_POST['action'];

	if ($action == "signup") {
		$register = mysqli_query($mysql, "INSERT INTO `users_info` (`login`, `password`) VALUES ('$login', '$passwd')");
		$result = mysqli_query($mysql, "SELECT * FROM `users_info` WHERE `login` = '$login' AND `password` = '$passwd'");
		$user = mysqli_fetch_assoc($result);

		$_SESSION['msgError'] = ""; 
		header('Location: /');
	}elseif($action == "signin") {
		$result = mysqli_query($mysql, "SELECT * FROM `users_info` WHERE `login` = '$login' AND `password` = '$passwd'");
		$user = mysqli_fetch_assoc($result);
		if ($user == null) {
			$_SESSION['msgError'] = "invalid logpass";
			header('Location: /');
		}else{
			$_SESSION['msgError'] = "";
			$_SESSION['account'] = $user['id'];
			header('Location: /portal');
		}
	}
?>