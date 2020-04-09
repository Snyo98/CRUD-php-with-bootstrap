<?php
	session_start();

	include 'koneksi.php';

	if(isset($_POST['simpan']))
	{
		$no_plnggn = $_POST['no_pelanggan'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$hp = $_POST['hp'];
		$email = $_POST['email'];
		
		$sql = "INSERT INTO tb_pelanggan (no_pelanggan, nama, alamat, handphone, email)VALUES ('$no_plnggn','$nama','$alamat','$hp','$email')";
		$result = $conn->query($sql);

		if ($result) 
		{
			$_SESSION['alert'] = "Data Pelanggan Telah Disimpan";
		 	header("location:main_page.php?page=view_pelanggan");
		} else {
			$_SESSION['alert'] = "Proses Gagal";
		 	header("location:main_page.php?page=pusat_pelanggan");
		}
	}
?>