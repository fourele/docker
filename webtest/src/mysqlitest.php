<?php
$mysqli = new mysqli("localhost", "root", "root", "test");

if ($mysqli->connect_errno) {
	die("connect failed");
} else {
	echo 'ok';
	$mysqli->close();
}
?>