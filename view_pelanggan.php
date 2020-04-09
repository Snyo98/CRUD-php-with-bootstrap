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


	<script src="bootstrap/js/jquery-3.4.1.slim.min.js"></script>
	<script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script type="boostrap/js/datatables.min.js"></script>
    <script type="boostrap/js/jquery.dataTables.min.js"></script>
</head>
<!-- Alert Notification -->
		<div class="col-md-10 p-3 pt-2">
		<div class="row">
			<div class="col-sm-12 p-3 pt-2 text-center">
	<?php if(isset($_SESSION['alert'])): ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<strong><?php echo $_SESSION['alert'];?></strong>
	</div>
	<?php
		unset($_SESSION['alert']);
		endif;
	?>	
	</div>
</div>
        <div class="row text-white">
          <div class=" col-sm-12" style="width: 18rem;">
<table id="view" class="table table-striped table-bordered"">	<thead>
		<tr>
			<th scope="col">No</th>
			<th scope="col">Nomor Pelanggan</th>
			<th scope="col">Nama Lengkap</th>
			<th scope="col">Alamat</th>
			<th scope="col">Handphone</th>
			<th scope="col">Email</th>
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