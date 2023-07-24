<?php
include "koneksi.php";
include "zklibrary.php";
//ip fingerprint
$zk = new ZKLibrary('192.168.1.201', 4370);
$zk1 = new ZKLibrary('192.168.1.201', 4370);
$zk2 = new ZKLibrary('192.168.1.201', 4370);

$zk->connect();
$zk->disableDevice();
$users = $zk->getUser();
foreach($users as $key=>$user)
{
	$uid 		= $key;
	$id_siswa	= $user[0];
	$nama 		= $user[1];
	$jurusan	= $user[2];
	$kelas		= $user[3];
	$tingkat	= $user[4];

	$cek = $koneksi->query("SELECT * FROM tbl_siswa WHERE uid='$uid' AND id_siswa='$id_siswa' AND nama='$nama' AND jurusan='$jurusan' AND kelas='$kelas' AND tingkat='$tingkat'");
	$validasi = $cek->num_rows;

	if ($validasi>0) {

		
		echo " <meta http-equiv='refresh' content='1;url=index.php?halaman=siswa'>";
	}else{

		 $query = $koneksi->query("INSERT INTO tbl_siswa (uid, id_siswa, nama, jurusan, kelas, tingkat) VALUES ('$uid','$id_siswa', '$nama', '$jurusan', '$kelas', '$tingkat')");
	}
   
}

$zk->enableDevice();
header("location:index.php?halaman=siswa");
