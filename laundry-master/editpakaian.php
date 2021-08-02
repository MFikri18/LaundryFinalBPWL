<?php 
// koneksi database
include 'Config.php';
if (isset($_POST['Submit'])) {

// menangkap data yang di kirim dari form
$kode_pakaian = $_POST['kode_pakaian'];
$jenis_pakaian = $_POST['jenis_pakaian'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

// update data ke database
mysqli_query($con,"UPDATE pakaian set jenis_pakaian='$jenis_pakaian', jumlah='$jumlah', harga='$harga' where kode_pakaian='$kode_pakaian'");

// mengalihkan halaman kembali ke index.php
header("location:datacustomer.php");
}
?>