<!DOCTYPE html>
<html>

<head>
	<title>Export Data Ke Excel</title>
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

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Presensi.xls");
	?>

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
							echo "Masuk";
						} else {
							echo "Pulang";
						}
						?>
					</td>
				</tr>
			</tbody>
		<?php } ?>
	</table>
</body>

</html>