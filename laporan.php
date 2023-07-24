<h2>Laporan Presensi</h2>
<hr>

<form action="" method="post">
	<div class="form-group">
		<label>Bulan</label>
		<input type="date" name="bulan1">
		<label>s/d</label>
		<input type="date" name="bulan2">

		<button class="btn btn-success" name="cari"><i class="fa fa-seach"></i> Cari</button>
	</div>
</form>

<?php



if (isset($_POST['cari'])) {

	$bln1 = $_POST['bulan1'];
	$bln2 = $_POST['bulan2'];



?>

	<a target="_blank" href="export.php?bln1=<?php echo $bln1; ?>&bln2=<?php echo $bln2; ?>" style="float: right;"><i class="fa fa-upload"></i> Export Excel</a><br><br>
	<a target="_blank" href="cetak.php?bln1=<?php echo $bln1; ?>&bln2=<?php echo $bln2; ?>" style="float: right;"><i class="fa fa-print"></i> Cetak</a><br><br>
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
		JOIN tbl_angkatan ON tbl_siswa.id_angkatan=tbl_angkatan.id_angkatan
		WHERE time BETWEEN '$bln1' AND '$bln2'");
		// SELECT * FROM tbl_presensi WHERE time BETWEEN '$bln1' AND '$bln2'");
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