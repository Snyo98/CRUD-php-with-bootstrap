<?php session_start();
if (!isset($_SESSION['islogin'])) {
 	$_SESSION['alert'] = "silahkan login dahulu";
 	header("location:index.php");
 }
?>
<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Dashboard</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
      <a class="navbar-brand text-white" href="#">Selamat Datang Admin </a>    
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav> x  
    <div class="row no-gutters mt-4">
      <div class="col-md-2 badge-primary mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="  ?page=beranda"><i class="far fa-tachometer-alt-slowest"></i>
            Beranda</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="?page=view_pelanggan">Data Pelanggan</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="?page=pusat_pelanggan">Kelola Data</a><hr class="bg-secondary">
          </li>      
          <li class="nav-item">
            <a class="nav-link text-white" href="logout.php">Log Out</a><hr class="bg-secondary">
          </li>    
        </ul>
      </div>
      <?php 
      if (isset($_GET['page'])) 
      {
        $page = $_GET['page'];
        Include $page.'.php';
        }else {
          Include 'beranda.php';
        }
      ?>
    </div>
  </div>
</body>
</html>