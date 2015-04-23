<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'blog_db');
	if($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_error .')'
			. $mysqli->connect_error);
	}
	else {
		// echo "Connection made";
	}
$mysqli->close();
?>