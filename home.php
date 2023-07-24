<?php include("koneksi.php");
    // $sql = $koneksi->query('SELECT * FROM user');
    // $data = $sql->fetch_assoc();
    ?>
<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-users"></i>
                </div>
                <div class="mr-5 fas fa-users">
                  <?php
                  $sql = $koneksi->query('SELECT * FROM tbl_admin');
                  $jumlah_user = mysqli_num_rows($sql);
                  echo $jumlah_user ?> Guru</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="index.php?halaman=user">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-users"></i>
                </div>
                <div class="mr-5 fas fa-users"> <?php
                  $sql = $koneksi->query('SELECT * FROM tbl_siswa');
                  $jumlah_user = mysqli_num_rows($sql);
                  echo $jumlah_user ?> Siswa</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="index.php?halaman=user">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list-alt"></i>
                </div>
                <div class="mr-5 fas fa-list-alt"> <?php
                  $sql = $koneksi->query('SELECT * FROM tbl_presensi');
                  $jumlah_user = mysqli_num_rows($sql);
                  echo $jumlah_user ?> Presensi</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="index.php?halaman=presensi">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-book"></i>
                </div>
                <div class="mr-5 fas fa-book"> <?php
                  $sql = $koneksi->query('SELECT * FROM tbl_jurusan');
                  $jumlah_user = mysqli_num_rows($sql);
                  echo $jumlah_user ?> jurusan</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="index.php?halaman=jurusan">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
        
        <h2>Aplikasi Fingerprint </h2>
        <img src="1.jpg" alt="1.jpg" width="200px">