<?php 
session_start();
include'koneksi.php';
if (!isset($_SESSION['admin'])) {
  
  echo "<script>alert('Anda harus Login');</script>";
  echo "<script>location='login.php';</script>";
  header("location:login.php");
  exit();
}
 ?>

 
 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Presensi Siswa</title>

  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="">Absensi Siswa</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <?php include("koneksi.php");
    $sql = $koneksi->query('SELECT * FROM tbl_admin where id_admin');
    $data = $sql->fetch_assoc();
    ?>
    <p class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       <font color="white"> Selamat Datang, <?php echo $data['username']; ?></font>
    </p>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0" id="accordionSidebar">
     
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="logout.php" >Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>     
      
      <li class="nav-item">
        <a class="nav-link" href="index.php?halaman=siswa">
          <i class="fas fa-fw fa-user"></i>
          <span>Data Siswa</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?halaman=guru">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Guru</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-list"></i>
        <span>Presensi</span></a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Presensi Siswa</h6>
            <a class="collapse-item" href="index.php?halaman=masuk">Masuk</a>
            <a class="collapse-item" href="index.php?halaman=pulang">Pulang</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?halaman=laporan">
          <i class="fas fa-fw fa-print"></i>
          <span>Laporan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?halaman=laporan_siswa">
          <i class="fas fa-fw fa-users"></i>
          <span>Laporan per Siswa</span></a>
      </li>

    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

          <?php 
            if (isset($_GET['halaman'])) {
              if ($_GET['halaman']=="user") {
                include'user.php';
              }

              elseif ($_GET['halaman']=="siswa") {
                include'siswa.php';
              }

              elseif ($_GET['halaman']=="guru") {
                include'guru.php';
              }

              elseif ($_GET['halaman']=="masuk") {
                include'masuk.php';
              }

              elseif ($_GET['halaman']=="presensi") {
                include'presensi.php';
              }

              elseif ($_GET['halaman']=="pulang") {
                include'pulang.php';
              }
             
              elseif ($_GET['halaman']=="laporan") {
                include'laporan.php';
              }
              
              elseif ($_GET['halaman']=="tambah_user") {
                include'tambah_user.php';
              }

               elseif ($_GET['halaman']=="hapus_user") {
                include'hapus_user.php';
              }

              elseif ($_GET['halaman']=="laporan_siswa") {
                include'laporan_siswa.php';
              }
              elseif ($_GET['halaman']=="testing") {
                include'testing.php';
              }
            }
            else{
              include'home.php';
            }
           ?>

      
        
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Aplikasi Presensi Online SMK Mupat 2022 &copy RPL</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
