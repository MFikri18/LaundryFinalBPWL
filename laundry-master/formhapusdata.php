<?php 
// koneksi database
include 'Config.php';
if (isset($_GET['kode_customer'])) {
	$kode_customer = $_GET['kode_customer'];

// update data ke database
mysqli_query($con,"DELETE FROM customer where kode_customer='$kode_customer'");

// mengalihkan halaman kembali ke index.php
header("location:datacustomer.php");
}
?>