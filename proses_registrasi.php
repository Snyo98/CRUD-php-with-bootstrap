<?php 
session_start();
include 'koneksi.php' ;
if (isset($_POST['regist'])) {
    $nama = $_POST['nickname'] ;
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $waktu = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO tb_user (id_user, nama, username, password, waktu_pembuatan )  VALUES ( null,'$nama', '$username', '$password', '$waktu')";
    $result = $conn->query($sql);
    if ($result) {
        $_SESSION['alert']="Berhasil registrasi";
        header("location:index.php");
        
        }else{
            $_SESSION['alert']="Gagal registrasi";
        header("location:registrasi.php");
        }
    }
?>