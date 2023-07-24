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
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>JABATAN</th>
            <th>OPSI</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $ambil = $koneksi->query('SELECT * FROM tbl_guru
          JOIN tbl_jabatan ON tbl_guru.id_jabatan=tbl_jabatan.id_jabatan;');
          $no = 1;
          while ($pecah = $ambil->fetch_assoc()) {

          ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $pecah['nama']; ?></td>
              <td><?php echo $pecah['username']; ?></td>
              <td><?php echo $pecah['password']; ?></td>
              <td><?php echo $pecah['jabatan']; ?></td>
              <td>
                <a href="index.php?halaman=tambah_guru&id=<?php echo $pecah['id_guru']; ?>"><i class="fa fa-edit"></i> Ubah</a>
                <a href="index.php?halaman=hapus_guru&id=<?php echo $pecah['id_guru']; ?>"><i class="fa fa-trash"></i> Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>

      </table>
    </div>
  </div>

</div>