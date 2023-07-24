<a href="tarik_presensi.php" class="btn btn-info" style="float: right;"><i class="fa fa-download"></i> Tarik Data</a><br><br>
<meta http-equiv="refresh" content="100" href="tarik_presensi.php">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Presensi</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>STATE</th>
                    <th>TGL</th>
                    <th>TIME</th>
                    <th>STATUS</th>
                  </tr>
                </thead> 
        
        
                <tbody>
                  <?php 
                  $no = 1;
                      // $ambil1 = $koneksi->query('SELECT * FROM presensi JOIN user ON presensi.id=user.id WHERE presensi.id = user.id GROUP BY user.name ORDER BY presensi.time1 DESC');
                  $ambil1 = $koneksi->query('SELECT * FROM presensi JOIN user ON presensi.id=user.id WHERE presensi.id = user.id ORDER BY presensi.time1 DESC');
                      while($pecah1 = $ambil1->fetch_assoc()){
                      
                   ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $pecah1['id']; ?></td>
                    <td><?php echo $pecah1['name']; ?></td>
                    <td><?php echo $pecah1['state']; ?></td>
                    <td><?php echo $pecah1['time']; ?></td>   
                    <td><?php echo $pecah1['time1']; ?></td>
                    <td><?php if ($pecah1['time1']<"01:00:00") {
                      ?> <p style="border: solid 1px #aaa; background: #0000FF; padding: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; -webkit-border-radius: 15px; border-radius: 15px; margin: 0; text-align: justify; line-height: 12px; color: white; font-size: 18px"><?php echo "Masuk";
                    } else{
                      ?> <p style="border: solid 1px #aaa; background: #FF0000; padding: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; -webkit-border-radius: 15px; border-radius: 15px; margin: 0; text-align: justify; line-height: 12px; color: white; font-size: 18px"><?php echo "Pulang";
                    }
                    ?></td>
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
