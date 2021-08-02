<?php 
// koneksi database
include 'Config.php';
if (isset($_GET['kode_pakaian'])) {
	$kode_pakaian = $_GET['kode_pakaian'];

// update data ke database
mysqli_query($con,"DELETE FROM pakaian where kode_pakaian='$kode_pakaian'");

// mengalihkan halaman kembali ke index.php
header("location:datacustomer.php");
}
?>