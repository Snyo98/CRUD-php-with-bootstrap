<?php
	include 'koneksi.php';

	$no_pelanggan 	= "";
	$nama_pel   = "";
	$alamat     = "";
	$handphone  = "";
	$email      = "";
	$readonly 	= ""; //variable untuk mengaktifkan/tidak inputan npm
	$action 	= 'simpan_pelanggan.php';

	if(isset($_GET['no_pelanggan'])) //Jika ada parameter npm di url
	{
	$no_pelanggan = $_GET['no_pelanggan'];

	$sql = "SELECT * FROM tb_pelanggan WHERE no_pelanggan='$no_pelanggan'";
	$results = $conn->query($sql);

	if($results->num_rows > 0)
	{
	while ($row = $results->fetch_assoc())
	 {
		 $nama_pel	= $row['nama'];
		 $alamat  	= $row['alamat'];
		 $handphone	= $row['handphone'];
		 $email 	= $row['email'];
		 $readonly 	= "readonly";
		 $action 	= 'update_pelanggan.php';

		}
	}
}

?>	<div class="col-md-10 p-3 pt-2">
		<div class="row">
			<div class="col-sm-12 p-3 pt-2">
<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<div class="outter-form-login">
 <div class="col-md-12">  
  <div class="page-header">
<!-- Alert Notification -->
	<?php if(isset($_SESSION['alert'])): ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<strong><?php echo $_SESSION['alert'];?></strong>
	</div>
	<?php
		unset($_SESSION['alert']);
		endif;
	?> 
   <h3 style="text-align: center;">Form Pelanggan</h3>
  </div>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label for="no_plnggn">Nomor Pelanggan</label>
		<input type="text" class="form-control" id="no_plnggn" name="no_pelanggan" placeholder="Nomor Pelanggan" value="<?php echo $no_pelanggan; ?>"> <?php echo $readonly; ?>
	</div>
	<div class="form-group">
		<label for="nama">Nama Lengkap</label>
		<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?php echo $nama_pel; ?>">
	</div>
	<div class="form-group">
		<label for="alamat">Alamat</label>
		<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>">
	</div>
	<div class="form-group">
		<label for="no_hp">Nomor Handphone</label>
		<input type="number" min=0 class="form-control" id="hp" name="hp" placeholder="Masukka Nomor Handphone Aktif" value="<?php echo $handphone; ?>">
	</div>
	<div class="form-group">
		<label for="email">Alamat Email</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" value="<?php echo $email; ?>">
	</div>
	<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</form>