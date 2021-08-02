<?php 
// koneksi database
include 'Config.php';
if (isset($_POST['Submit'])) {

// menangkap data yang di kirim dari form
$kode_transaksi = $_POST['kode_transaksi'];
$kode_customer = $_POST['kode_customer'];
$tgl_transaksi = $_POST['tgl_transaksi'];
$total_transaksi = $_POST['pakaian.harga*pakaian.jumlah'];

// update data ke database
mysqli_query($con,"UPDATE transaksi set kode_customer='$kode_customer', tgl_transaksi='$tgl_transaksi', pakaian.harga*pakaian.jumlah='$total_transaksi' where kode_transaksi='$kode_transaksi'");

// mengalihkan halaman kembali ke index.php
header("location:services.php");
}
?>