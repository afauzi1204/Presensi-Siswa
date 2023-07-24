<!-- <meta http-equiv="refresh" content="3"> -->
<?php

include "koneksi.php";
include "zklibrary.php";
$zk = new ZKLibrary('192.168.5.7', 4370);
$zk->connect();
$zk->disableDevice();

$zk1 = new ZKLibrary('192.168.5.8', 4370);
$zk1->connect();
$zk1->disableDevice();

$zk2 = new ZKLibrary('192.168.5.9', 4370);
$zk2->connect();
$zk2->disableDevice();



$data = $zk->getAttendance();
$data = $zk1->getAttendance();
$data = $zk2->getAttendance();
// print_r($data);

foreach ($data as $key => $value) {
	$uid 	= $key;
	$id 	= $value[1];
	$state 	= $value[2];
	$time 	= $value[3];
	$time1 	= $value[3];

	$cek = $koneksi->query("SELECT * FROM tbl_presensi WHERE uid='$uid' AND id='$id' AND state='$state' AND time='$time' AND time1='$time1'");
	$validasi = $cek->num_rows;
	if ($validasi < 1) {
		$query = $koneksi->query("INSERT INTO tbl_presensi (uid, id, state,  time, time1) VALUES ('$uid', '$id', '$state',  '$time', '$time1')");
	} else {
		echo " DATA SUDAH ADA";
		echo " <meta http-equiv='refresh' content='1;url=index.php?halaman=masuk'>";
	}
}

$zk->enableDevice();
$zk1->enableDevice();
$zk2->enableDevice();
header("location:index.php?halaman=masuk");
?>