<?php
	session_start();
	include '../non-account-redirect.php';
	header('Location: /portal/Profile?id='.$user['id'].'');
	$id = $_GET['id'];
	$_FILES['filename']['name'] = $id.'.png';
	#echo($_FILES['filename']['name']);

	if(move_uploaded_file($_FILES['filename']['tmp_name'], 'avatars/'.$_FILES['filename']['name'])){
		#echo "файл загружен";
		#$_SESSION['avatar'] = $_FILES['filename']['name'];
	} else{
		echo "ERROR!";
	}
?>