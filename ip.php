<?php 
	$get = $koneksi->query('SELECT * FROM ip');
	$t = $get->fetch_assoc();
 ?>
<form action="" method="POST">
	<div class="form-group">
		<label>IP Addres</label>
		<input type="text" class="form-control" name="ip" value="<?php echo $t['ip']; ?>">
	</div>
	<div class="form-group">
		<button class="btn btn-success" name="save"><i class="fa fa-check"></i> Simpan</button>
	</div>
</form>

<?php 
	if (isset($_POST['save'])) {
		$koneksi->query("UPDATE ip SET ip = '$_POST[ip]' WHERE id=1");

		echo " <div class='alert alert-success'>Data Berhasil Di Simpan.!</div>";
		echo " <meta http-equiv='refresh' content='1;url=index.php?halaman=ip'>";
		
	}
 ?>
 