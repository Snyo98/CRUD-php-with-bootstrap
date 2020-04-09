<?php 
$servername ="localhost"; 
$username = "root";
$password = "";
$dbname = 'web2020';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("connection_failed: ". $conn->connect_error);
}
?>