<?php
 session_start();
 include'koneksi.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN XII RPL MUPAT</title>

    <!-- Custom fonts for this template-->
    <!-- <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <style type="text/css">
      .baris { line-height: 10px; }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <p align="center"><img src="dist/img/logo.png" class="d-block w-30" height="100">
                                        <h1 class="h4 text-gray-900 mb-4; baris"><b>FORM LOGIN</b></h1></p>
                                        <p class="h4 text-black-500 mb-4">Aplikasi Fingerprint
                                    </div>
                                    <!-- <form method="post" action="" class="user"> -->
                                      <form method="POST" class="user">
                                        <p align="center">
                                            <font color="#F216">
                                                <?php
                                                if (isset($_GET['pesan'])) {
                                                    if ($_GET['pesan'] == "gagal") {

                                                        echo "Login gagal";
                                                    } else if ($_GET['pesan'] == "logout") {
                                                        echo "berhasil logout";
                                                    }
                                                }
                                                ?>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user" placeholder="Masukkan Username" name="username" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user" placeholder="Password" name="password" required="required">
                                                </div>
                                                <div class="form-group">
                                                </div>
                                                <button type="submit" class="btn btn-primary form-control" name="login">Login</button>

                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        Belum Punya Akun? <a href="http://localhost/toko_online/registrasi/index">Daftar</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


  <?php 
      if (isset($_POST['login'])) {

        $user = htmlspecialchars($_POST['username']);
        $pass = htmlspecialchars($_POST['password']);

        $query= $koneksi->query("SELECT * FROM tbl_admin WHERE username = '$user' AND password='$pass'");
        $yangcocok = $query-> num_rows;

        if ($yangcocok==1) {
          $_SESSION['admin'] = $query->fetch_assoc();
          header("location:index.php");
          // echo "<div class='alert alert-success'>Berhasil Login..!</div>";
          // echo "<meta http-equiv='refresh' content='1;url=index.php'>";
        }
        else{
          echo "<div class='alert alert-danger'>Tidak Cocok..!</div>";
          echo "<meta http-equiv='refresh' content='1;url=login.php'>";
        }
      }
   ?>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
