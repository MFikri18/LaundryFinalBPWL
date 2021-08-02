<?php 
//VARIABEL UNTUK MENYIMPAN PESAN (VALIDASI)
include 'Config.php';
$kode_pakaianErr = $jenis_pakaianErr = $jumlahErr = $hargaErr = "";

//JIKA MENGIRIMKAN DATA DENGAN NAME "SAVE" (TOMBOL SAVE TELAH DI KLIK)
if(isset($_POST['Submit'])){
    //JIKA DATA ADA YANG KOSONG
    if(!isset($_POST['kode_pakaian']) || !isset($_POST['jenis_pakaian']) || !isset($_POST['jumlah']) || !$_POST['harga']){
        if($_POST['kode_pakaian'] == ""){
        $kode_pakaianErr = "kode_pakaian tidak boleh kosong!";
        }
        if($_POST['jenis_pakaian'] == ""){
            $jenis_pakaianErr = "jenis_pakaian tidak boleh kosong!";
        }
        if($_POST['jumlah'] == ""){
            $jumlahErr = "jumlah tidak boleh kosong!";
        }
        if($_POST['harga'] == ""){
            $hargaErr = "harga tidak boleh kosong!";
        }
    }else{
        //SELAIN DATA ADA YANG KOSONG (BERARTI SEMUA FORM TERISI)
        $kode_pakaian = $_POST['kode_pakaian'];
        $jenis_pakaian = $_POST['jenis_pakaian'];
        $jumlah = $_POST['jumlah'];
        $harga = $_POST['harga'];

        $query = "INSERT INTO pakaian (kode_pakaian,jenis_pakaian,jumlah,harga) VALUES('$kode_pakaian', '$jenis_pakaian', '$jumlah', '$harga')";

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