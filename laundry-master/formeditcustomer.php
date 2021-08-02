<?php 
// koneksi database
include 'Config.php';
if (isset($_POST['Submit'])) {

// menangkap data yang di kirim dari form
$kode_customer = $_POST['kode_customer'];
$nama_customer = $_POST['nama_customer'];
$alamat_customer = $_POST['alamat_customer'];
$tlpn_transaksi = $_POST['tlpn_transaksi'];

// update data ke database
mysqli_query($con,"UPDATE customer set nama_customer='$nama_customer', alamat_customer='$alamat_customer', tlpn_transaksi='$tlpn_transaksi' where kode_customer='$kode_customer'");

// mengalihkan halaman kembali ke index.php
header("location:datacustomer.php");
}
?>