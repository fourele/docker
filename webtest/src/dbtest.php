<?php
$db = new mysqli('localhost', 'root', 'root', 'test');
$res = $db->query('select * from test');
if ($res) {
	$arr = $res->fetch_assoc();
	echo $arr['a'];
} else {
	echo 'query failed';
}
?>