<?php
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$mysql = new mysqli('localhost', 'root', 'cotsom17', 'users');

	if (mysqli_connect_errno()) {
		echo mysqli_connect_errno();
		echo mysqli_connect_error();
	}
?>