<?php
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$mysql = new mysqli("localhost", "root", "4404Lisa4404", 'users');

	if (mysqli_connect_errno()) {
		echo mysqli_connect_errno();
		echo mysqli_connect_error();
	}
?>
