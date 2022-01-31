<?php
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$mysql = new mysqli('mariadb', 'root', 'password', 'users');

	if (mysqli_connect_errno()) {
		echo mysqli_connect_errno();
		echo mysqli_connect_error();
	}
?>