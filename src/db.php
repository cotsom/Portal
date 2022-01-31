<?php
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$mysql = new mysqli($_ENV["DB_URL"], $_ENV["DB_USER"], $_ENV["DB_PASSWORD"], 'users');

	if (mysqli_connect_errno()) {
		echo mysqli_connect_errno();
		echo mysqli_connect_error();
	}
?>