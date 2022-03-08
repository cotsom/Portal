<?php
	session_start();
	include 'db.php';

	$login = $_POST['login'];
	$passwd = $_POST['passwd'];
	$card = $_POST['card'];
	$action = $_POST['action'];

	if ($action == "signup") {
		$result = mysqli_query($mysql, "SELECT * FROM `users_info` WHERE `login` = '$login'");
		$user = mysqli_fetch_assoc($result);
		if ($user == null) {
			$register = mysqli_query($mysql, "INSERT INTO `users_info` (`login`, `password`, `card`) VALUES ('$login', '$passwd', '$card')");
		}

		$_SESSION['msgError'] = "User with this login already exist"; 
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