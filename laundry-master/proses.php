<?php 
	include "database.php";
	$database = new database();

	$aksi = $_GET['aksi'];
		
	if ($aksi == "hapus") {
		$database->hapus($_GET['kode_trans']);
		header("location:services.php");
	}
	elseif ($aksi == "update") {
		$database->update($_POST['kode_transaksi'], $_POST['nama'], $_POST['tgl_trans'], $_POST['total_trans']);
		header("location:services.php");
	}
 ?>