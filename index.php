<?php
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>form login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-md-4 offset-md-4 form-login">
 
	<!-- alert -->
	<?php if (isset($_SESSION['alert'])): ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<button type="button" class="close" data-dismiss= "alert" aria-label ="close">
				<span aria-hidden="true">&times;</span>
			</button>
			<strong> <?php echo $_SESSION['alert']; ?></strong>
		</div>
		<?php 
		unset($_SESSION['alert']);
		endif;
		?>


		<!--form login -->
		 <div class="outter-form-login">
			<div class="text-center">
				<img src="logo.PNG" width="200px" class="mx-auto" >
			</div>
		<form action=" proses_login.php" class="inner-login" method="POST">
			<div class="form-group">
				<input type="text" class="form-control" name="user" placeholder="Username">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="pass" placeholder="Password">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-info btn-block btn-custom-green" value="MASUK">
			</div>
				<div class="text-center forget">
					<p>Belum Punya Akun? <a href="./registrasi.php">Registrasi</a></p>
				</div>	
			</form>
		</div>
	</div>
</body>
</html>