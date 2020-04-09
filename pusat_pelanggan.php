<?php
	include 'koneksi.php';

	$sql = "SELECT * FROM tb_pelanggan";
	$results = $conn->query($sql);
?>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/datatable.min.css">

</head>
	<div class="col-md-10 p-3 pt-2">
		<div class="row">
			<div class="col-sm-12 p-3 pt-2 text-center">
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
	<div class=" text-right">
		<a href="?page=form_pelanggan" class="btn btn-info">tambah data</a></div>
        <div class="row text-white">
          <div class=" col-sm-12" style="width: 18rem;">
<table id="view" class="table table-striped table-bordered"">	
	</div>
</div>
	<thead>
		<tr>
			<th scope="col">No</th>
			<th scope="col">Nomor Pelanggan</th>
			<th scope="col">Nama Lengkap</th>
			<th scope="col">Alamat</th>
			<th scope="col">Handphone</th>
			<th scope="col">Email</th>
			<th colspan="2" scope="col">Pilihan</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$no = 1;
				if ($results->num_rows>0) 
				{
					while ($row = $results->fetch_assoc()) 
					{
						# code...
		?>
		<tr>
			<th scope="row"><?php echo $no++ ?></td>
			<td><?php echo $row['no_pelanggan']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['alamat']; ?></td>
			<td><?php echo $row['handphone']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td>
				<a href="?page=form_pelanggan&no_pelanggan=<?php echo $row['no_pelanggan'] ?>" class="text-success" >
					<i class="fa fa-edit p-1"></i>
				</a> | 
				<a href="hapus_pelanggan.php?no_pelanggan=<?php echo $row['no_pelanggan'] ?>" class="text-danger"><i class="fa fa-trash p-1"></i>
				</a>
			</td>
		</tr>
		<?php
					}
				}else {
		?>	
			<tr>
				<td colspan="6">Data Kosong</td>
			</tr>
		<?php
			}
		?>	
	</tbody>
</table>