<!DOCTYPE html>
<html>

<head>
	<title>Cetak Data Presensi</title>
</head>

<body>
	<style type="text/css">
		body {
			font-family: sans-serif;
		}

		table {
			margin: 20px auto;
			border-collapse: collapse;
		}

		table th,
		table td {
			text-align: center;
			border: 1px solid #3c3c3c;
			padding: 3px 8px;

		}

		a {
			background: blue;
			color: #fff;
			padding: 8px 10px;
			text-decoration: none;
			border-radius: 2px;
		}
	</style>


	<center>
		<h1>Data Presensi</h1>
	</center>

	<?php include 'koneksi.php'; ?>
	<table border="1">
		<thead>
			<tr>
				<th>NO</th>
				<th width='250'>NAMA</th>
				<th width='100'>KELAS</th>
				<th width='100'>TINGKAT</th>
				<th width='130'>TANGGAL</th>
				<th width='130'>JAM</th>
				<th width='150'>STATUS</th>
			</tr>
		</thead>
		<?php
		$no = 1;
		$ambil = $koneksi->query("SELECT * FROM tbl_presensi 
		JOIN tbl_siswa ON tbl_presensi.id=tbl_siswa.id_siswa 
		JOIN tbl_kelas ON tbl_siswa.id_kelas=tbl_kelas.id_kelas
		JOIN tbl_angkatan ON tbl_siswa.id_angkatan=tbl_angkatan.id_angkatan");
		// WHERE id='$_GET[id]'");
		while ($pecah = $ambil->fetch_assoc()) {
			$nama = $pecah['id'];
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

	<table>

		<?php
		// $ambil2 = $koneksi->query("SELECT SUM(state) As total FROM presensi WHERE id = '$_GET[id]'");
		$ambil2 = $koneksi->query("select count(time1) as total from tbl_presensi");
		while ($pecah2 = $ambil2->fetch_assoc()) {;
		?>
			<tr>
				<td>Total Presensi :</td>
				<td><?php echo $pecah2['total']; ?></td>
			</tr>

		<?php } ?>
	</table>
</body>
<script>
	window.print()
</script>

</html>