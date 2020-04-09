<?php
	session_start();

	include 'koneksi.php';

	if (isset($_POST['simpan'])) 
	{
		$no_plnggn = $_POST['no_pelanggan'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$hp = $_POST['hp'];
		$email = $_POST['email'];

		$sql = "UPDATE tb_pelanggan SET nama ='$nama', alamat = '$alamat', handphone = '$hp', email = '$email' WHERE no_pelanggan = '$no_plnggn'";

		$result = $conn->query($sql);
		if ($result) 
		{
			$_SESSION['alert'] = "Data Pelanggan Telah Di update";
		 	header("location:main_page.php?page=pusat_pelanggan");
		} else {
			$_SESSION['alert'] = "Gagal Update Data";
		 	header("location:main_page.php?page=form_pelanggan");
		}
	}
?>