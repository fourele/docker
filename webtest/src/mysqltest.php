<?php
ini_set('display errors', 'On');
error_reporting(E_ALL ^ E_DEPRECATED);
$db = mysql_connect('localhost', 'root', 'root');
if (!$db) {
	die('db connect error');
} else {
	echo 'mysql ok';
}