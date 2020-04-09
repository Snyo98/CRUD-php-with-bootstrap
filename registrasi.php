<?php
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>registrasi</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="padding: 200px">
    <div class="col-md-6 offset-md-3">
 
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

        
        <!-- form registrasi -->
<div class="outter-form-login">
    <div class="">
        <em class="glyphicon glyphicon-user"></em>
    </div>
    <form action="proses_registrasi.php" class="inner-login" method="post">
        <h3 class="text-center title-login"><strong>Registrasi</strong></h3>
        <div class="form-group">
            <input type="text" class="form-control" name="nickname" placeholder="Nama">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <input type="submit" class="btn btn-block btn-custom-green" name="regist" value="REGISTER" />
        <div class="text-center forget">
            <p>Back To <a href="./index.php">Login</a></p>
        </div>
    </form>
</div>
</div>
</body>
</html>