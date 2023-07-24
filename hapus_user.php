<?php 
	$koneksi->query("DELETE FROM user WHERE id = '$_GET[id]'");

	echo "<script>alert('Data Terhapus..');</script>";
	echo"<script>location='index.php?halaman=user';</script>";
 ?>