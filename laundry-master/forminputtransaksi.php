<?php 
//VARIABEL UNTUK MENYIMPAN PESAN (VALIDASI)
include 'Config.php';
$kode_transaksiErr = $kode_customerErr = $tgl_transaksiErr = $total_transaksiErr = "";

//JIKA MENGIRIMKAN DATA DENGAN NAME "SAVE" (TOMBOL SAVE TELAH DI KLIK)
if(isset($_POST['Submit'])){
    //JIKA DATA ADA YANG KOSONG
    if(!isset($_POST['kode_transaksi']) || !isset($_POST['kode_customer']) || !isset($_POST['tgl_transaksi']) || !$_POST['total_transaksi']){
        if($_POST['kode_transaksi'] == ""){
        $kode_transaksiErr = "kode_transaksi tidak boleh kosong!";
        }
        if($_POST['kode_customer'] == ""){
            $kode_customerErr = "kode_customer tidak boleh kosong!";
        }
        if($_POST['tgl_transaksi'] == ""){
            $tgl_transaksiErr = "tgl_transaksi tidak boleh kosong!";
        }
        if($_POST['total_transaksi'] == ""){
            $total_transaksiErr = "total_transaksi tidak boleh kosong!";
        }
    }else{
        //SELAIN DATA ADA YANG KOSONG (BERARTI SEMUA FORM TERISI)
        $kode_transaksi = $_POST['kode_transaksi'];
        $kode_customer = $_POST['kode_customer'];
        $tgl_transaksi = $_POST['tgl_transaksi'];
        $total_transaksi = $_POST['total_transaksi'];

        $query = "INSERT INTO transaksi (kode_transaksi,kode_customer,tgl_transaksi,total_transaksi) VALUES('$kode_transaksi', '$kode_customer', '$tgl_transaksi', '$total_transaksi')";

        //KONEKSI DATABASE DAN EKSEKUSI QUERY 
        if (mysqli_query($con, $query)) {
            echo "<div class=\"alert alert-success\" role=\"alert\">Berhasil disimpan</div>";
            header("location:services.php");
        }else{
            //JIKA GAGAL KONEK DATABASE / EKSEKUSI QUERY
            echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal disimpan</div>";
            header("location:services.php");
        }
    }
}
 ?>