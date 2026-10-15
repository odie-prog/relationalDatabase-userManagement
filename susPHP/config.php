<?php
//config.php
$host = "localhost";
$user = "root"; //default xampp username
$pass = ""; //default xampp password
$db = "db_school";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
?>