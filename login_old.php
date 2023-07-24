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

  <title>Aplikasi Fingerprint</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Silahkan Login</div>
      <div class="card-body">
        <form method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input class="form-control"  required="required" autofocus="autofocus" name="username">
              <label>Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control"  required="required" name="password">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          
          <button class="btn btn-info" name="login">Login</button>
        </form>
       
      </div>
    </div>
  </div>

  <?php 
      if (isset($_POST['login'])) {

        $user = htmlspecialchars($_POST['username']);
        $pass = htmlspecialchars($_POST['password']);

        $query= $koneksi->query("SELECT * FROM admin WHERE username = '$user' AND password='$pass'");
        $yangcocok = $query-> num_rows;

        if ($yangcocok==1) {
          $_SESSION['admin'] = $query->fetch_assoc();
          echo "<div class='alert alert-success'>Berhasil Login..!</div>";
          echo "<meta http-equiv='refresh' content='1;url=index.php'>";
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

</body>

</html>
