<?php
class database{
    var $host = "localhost";
    var $user = "root";
    var $password = "";
    var $database = "sistem_laundry_newweek";
    var $con;

    function __construct(){
        $this->con=mysqli_connect($this->host, $this->user, $this->password, $this->database);
        mysqli_select_db($this->con, $this->database);
    }

    function hapus($kode_trans){
        mysqli_query($this->con, "DELETE FROM transaksi where kode_transaksi='$kode_trans'");
    }

	function update($kode_trans,$nama,$tgl_trans,$total_trans){
		mysqli_query("UPDATE transaksi set nama_customer='$nama', tgl_transaksi='$tgl_trans',total_transaksi='$total_trans' where kode_transaksi='$kode_trans'");
	}
}
?>