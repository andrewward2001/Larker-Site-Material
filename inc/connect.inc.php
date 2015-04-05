<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lark";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
}

session_start();
if(!isset($_SESSION["user_login"])) {
	$user = "";
} else {
	$user = $_SESSION["user_login"];
}
?>