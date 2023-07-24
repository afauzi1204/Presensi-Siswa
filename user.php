
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data User</div>
          <div class="card-body">
            <div class="table-responsive">
              <a href="tarik_user.php" class="btn btn-info" style="float: left;"><i class="fa fa-download"></i> Tarik Data</a><br><br>
              <!-- <a href="tambah_user.php" class="btn btn-info" style="float: left;"><i class="fa fa-plus"></i> Tambah Data</a><br><br> -->
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>LEVEL</th>
                    <th>PASSWORD</th>
                    <th>OPSI</th>
                  </tr>
                </thead> 
                  
                <tbody>
                  <?php 
                      $ambil = $koneksi->query('SELECT * FROM user');

                      while($pecah = $ambil->fetch_assoc()){
                   ?>
                  <tr>
                    <td><?php echo $pecah['uid']; ?></td>
                    <td><?php echo $pecah['id']; ?></td>
                    <td><?php echo $pecah['name']; ?></td>
                    <td><?php echo $pecah['level']; ?></td>
                    <td><?php echo $pecah['password']; ?></td>
                    <td>
                      <a href="index.php?halaman=tambah_user&id=<?php echo $pecah['id']; ?>"><i class="fa fa-edit"></i> Ubah</a>
                      <a href="index.php?halaman=hapus_user&id=<?php echo $pecah['id']; ?>"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              
              </table>
            </div>
          </div>
         
        </div>

