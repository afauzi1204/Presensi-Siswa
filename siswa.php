<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Data Guru
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <a href="tarik_user.php" class="btn btn-info" style="float: left;"><i class="fa fa-download"></i> Tarik Data</a><br><br>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>JURUSAN</th>
            <th>KELAS</th>
            <th>TINGKAT</th>
            <th>OPSI</th>
          </tr>
        </thead>
        <?php
        $ambil = $koneksi->query('SELECT * FROM tbl_siswa
        JOIN tbl_jurusan ON tbl_siswa.id_jurusan=tbl_jurusan.id_jurusan
        JOIN tbl_kelas ON tbl_siswa.id_kelas=tbl_kelas.id_kelas
        JOIN tbl_tingkat ON tbl_siswa.id_tingkat=tbl_tingkat.id_tingkat;');
        $no = 1;
        while ($pecah = $ambil->fetch_assoc()) {

        ?>
          <tbody>

            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $pecah['nama']; ?></td>
              <td><?php echo $pecah['nama_jurusan']; ?></td>
              <td><?php echo $pecah['kelas']; ?></td>
              <td><?php echo $pecah['tingkat']; ?></td>
              <td>
                <a href="index.php?halaman=ubah_siswa&id_siswa=<?php echo $pecah['id_siswa']; ?>"><i class="fa fa-edit"></i> Ubah</a>
                <a href="index.php?halaman=hapus_siswa&id_siswa=<?php echo $pecah['id_siswa']; ?>"><i class="fa fa-trash"></i> Hapus</a>
              </td>

          </tbody>
        <?php } ?>
      </table>
    </div>
  </div>

</div>