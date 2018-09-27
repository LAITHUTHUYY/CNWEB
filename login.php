<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db='music' ;

//l.ketnoi Server
$conn = mysqli_connect($servername, $username, $password, $db);

//kiem tra trang thai ket noi
if (!$conn) {
	die("connection failed: " . mysql_connect_error());
}
// thuc hien truy van databas
?>
html