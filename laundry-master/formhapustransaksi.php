<?php 
// koneksi database
include 'Config.php';
if (isset($_GET['kode_transaksi'])) {
	$kode_transaksi = $_GET['kode_transaksi'];

// update data ke database
mysqli_query($con,"DELETE FROM transaksi where kode_transaksi='$kode_transaksi'");

// mengalihkan halaman kembali ke index.php
header("location:services.php");
}
?>