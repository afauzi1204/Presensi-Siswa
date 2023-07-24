<h2>Laporan Presensi Siswa</h2>
<hr>

<form action="" method="post">
	<div class="form-group">
		<label>Nama Siswa</label>
		<select name="id_siswa" class="form-control">
			<?php
			$ambil = $koneksi->query("SELECT * FROM tbl_siswa");
			while ($g = $ambil->fetch_assoc()) {
			?>
				<option value="<?php echo $g['id_siswa']; ?>"><?php echo $g['nama']; ?></option>
			<?php } ?>
		</select>

		<br><button class="btn btn-success" name="cari"><i class="fa fa-seach"></i> Cari</button>
	</div>
</form>

<?php



if (isset($_POST['cari'])) {

	$id = $_POST['id_siswa'];




?>

	<a target="_blank" href="export_siswa.php?id=<?php echo $id_siswa; ?>" style="float: right;"><i class="fa fa-upload"></i> Export Excel</a><br><br>
	<a target="_blank" href="cetak_siswa.php?id=<?php echo $id_siswa; ?>" style="float: right;"><i class="fa fa-print"></i> Cetak</a><br><br>
	<table class="table table-striped">
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
		<?php
		$no = 1;
		$ambil = $koneksi->query("SELECT * FROM tbl_presensi 
		JOIN tbl_siswa ON tbl_presensi.id=tbl_siswa.id_siswa 
		JOIN tbl_kelas ON tbl_siswa.id_kelas=tbl_kelas.id_kelas
		JOIN tbl_angkatan ON tbl_siswa.id_angkatan=tbl_angkatan.id_angkatan");
		while ($pecah = $ambil->fetch_assoc()) {
		?>
			<tbody>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $pecah['nama']; ?></td>
					<td><?php echo $pecah['rombel']; ?></td>
					<td><?php echo $pecah['tingkat']; ?></td>
					<td><?php echo $pecah['time']; ?></td>
					<td><?php echo $pecah['time1']; ?></td>
					<td><?php if ($pecah['time1'] < "12:00:00") {
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
			</tbody>
		<?php } ?>
	</table>

<?php } ?>