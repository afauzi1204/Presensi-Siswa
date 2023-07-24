<meta http-equiv="refresh" content="100" href="tarik_presensi_pulang.php">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Data Presensi
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <a href="tarik_presensi_pulang.php" class="btn btn-info" style="float: right;"><i class="fa fa-download"></i> Tarik Data</a><br><br>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>TINGKAT</th>
            <th>TANGGAL</th>
            <th>JAM</th>
            <th>STATUS</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          // $ambil1 = $koneksi->query('SELECT * FROM presensi JOIN user ON presensi.id=user.id WHERE presensi.id = user.id GROUP BY user.name ORDER BY presensi.time1 DESC');
          $ambil1 = $koneksi->query('SELECT * FROM tbl_presensi 
                      JOIN tbl_siswa ON tbl_presensi.id=tbl_siswa.id_siswa 
                      JOIN tbl_kelas ON tbl_siswa.id_kelas=tbl_kelas.id_kelas
                      JOIN tbl_tingkat ON tbl_siswa.id_tingkat=tbl_tingkat.id_tingkat
                      WHERE tbl_presensi.id = tbl_siswa.id_siswa AND tbl_presensi.time=CURDATE() AND tbl_presensi.time1>"12:00:00" GROUP BY tbl_siswa.nama ORDER BY tbl_presensi.time DESC');
          while ($pecah1 = $ambil1->fetch_assoc()) {

          ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $pecah1['nama']; ?></td>
              <td><?php echo $pecah1['rombel']; ?></td>
              <td><?php echo $pecah1['tingkat']; ?></td>
              <td><?php echo $pecah1['time']; ?></td>
              <td><?php echo $pecah1['time1']; ?></td>
              <td><?php if ($pecah1['time1'] < "12:00:00") {
                  ?> <p style="border: solid 1px #aaa; background: #0000FF; padding: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; -webkit-border-radius: 15px; border-radius: 15px; margin: 0; text-align: justify; line-height: 12px; color: white; font-size: 18px">
                  <?php echo "Masuk";
                  } else {
                  ?>
                  <p style="border: solid 1px #aaa; background: #FF0000; padding: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; -webkit-border-radius: 15px; border-radius: 15px; margin: 0; text-align: justify; line-height: 12px; color: white; font-size: 18px">
                  <?php echo "Pulang";
                  }
                  ?>
              </td>
            </tr>
          <?php } ?>
        </tbody>

      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">
    Updated today at
    <?php
    date_default_timezone_set('Asia/Jakarta');
    echo date('l, d-m-Y H:m:s')
    ?>
  </div>
</div>