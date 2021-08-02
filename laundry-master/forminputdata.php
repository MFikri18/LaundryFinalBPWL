<?php 
//VARIABEL UNTUK MENYIMPAN PESAN (VALIDASI)
include 'Config.php';
$kode_customerErr = $nama_customerErr = $alamat_customerErr = $telp_transaksiErr = "";

//JIKA MENGIRIMKAN DATA DENGAN NAME "SAVE" (TOMBOL SAVE TELAH DI KLIK)
if(isset($_POST['Submit'])){
    //JIKA DATA ADA YANG KOSONG
    if(!isset($_POST['kode_customer']) || !isset($_POST['nama_customer']) || !isset($_POST['alamat_customer']) || !$_POST['tlpn_transaksi']){
        if($_POST['kode_customer'] == ""){
        $kode_customerErr = "kode_customer tidak boleh kosong!";
        }
        if($_POST['nama_customer'] == ""){
            $nama_customerErr = "nama_customer tidak boleh kosong!";
        }
        if($_POST['alamat_customer'] == ""){
            $alamat_customerErr = "alamat_customer tidak boleh kosong!";
        }
        if($_POST['tlpn_transaksi'] == ""){
            $tlpn_transaksiErr = "tlpn_transaksi tidak boleh kosong!";
        }
    }else{
        //SELAIN DATA ADA YANG KOSONG (BERARTI SEMUA FORM TERISI)
        $kode_customer = $_POST['kode_customer'];
        $nama_customer = $_POST['nama_customer'];
        $alamat_customer = $_POST['alamat_customer'];
        $tlpn_transaksi = $_POST['tlpn_transaksi'];

        $query = "INSERT INTO customer (kode_customer,nama_customer,alamat_customer,tlpn_transaksi) VALUES('$kode_customer', '$nama_customer', '$alamat_customer', '$tlpn_transaksi')";

        //KONEKSI DATABASE DAN EKSEKUSI QUERY 
        if (mysqli_query($con, $query)) {
            echo "<div class=\"alert alert-success\" role=\"alert\">Berhasil disimpan</div>";
            header("location:datacustomer.php");
        }else{
            //JIKA GAGAL KONEK DATABASE / EKSEKUSI QUERY
            echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal disimpan</div>";
            header("location:about.html");
        }
    }
}
 ?>