<?php
session_start();
include 'koneksi.php';
if(isset($_POST['submit']))
{
$user = htmlspecialchars($_POST['user']);
$pass = md5($_POST['pass']); 

$sql = "SELECT * FROM tb_user WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if($result->num_rows>0) {
$_SESSION['islogin'] = true;
header("location:main_page.php");
} 
else {
$_SESSION['alert'] = "Username atau Password tidak sesuai";
header("location:index.php");
	 }
}


?>