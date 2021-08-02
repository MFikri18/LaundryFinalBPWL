<?php
// koneksi ke database
ob_start();
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "sistem_laundry_newweek";
$conn = mysqli_connect($host, $user, $pass);

if ($conn) {
    $open = mysqli_select_db($conn, $dbnm);
    if (!$open) {
        die ("Database tidak dapat dibuka karena ".mysqli_error());
    }
} else {
    die ("Server MySQL tidak terhubung karena ".mysqli_error());
}
// akhir koneksi

# ambil data di tabel dan masukkan ke array
$query = "SELECT * FROM transaksi ORDER BY kode_customer";
$sql = mysqli_query ($conn, $query);
$data = array();
while ($row = mysqli_fetch_assoc($sql)) {
    array_push($data, $row);
}

# setting judul laporan dan header tabel
$judul = "DATA TRANSAKSI LAUNDRY NEW WEEK";
$header = array(
    array("label"=>"KODE TRANSAKSI", "length"=>40, "align"=>"L"),
    array("label"=>"KODE CUSTOMER", "length"=>40, "align"=>"L"),
    array("label"=>"TANGGAL TRANSAKSI", "length"=>50, "align"=>"L"),
    array("label"=>"TOTAL TRANSAKSI", "length"=>60, "align"=>"L")
);

# sertakan library FPDF dan bentuk objek
require_once ("fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();

# Menampilkan judul laporan
$pdf->SetFont('Arial','B','16');
$pdf->Cell(0,70, $judul, '0', 1, 'C');

# Membuat header tabel
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(255,0,0);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);
$pdf->Image('logo_laundry.jpeg', 80, 55, 55);
foreach ($header as $kolom) {
    $pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0',
    $kolom['align'], true);
}
$pdf->Ln();

# Menampilkan data tabelnya
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('');
$fill=false;
foreach ($data as $baris) {
    $i = 0;
    foreach ($baris as $cell) {
        $pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'],
        $fill);
        $i++;
    }
    $fill = !$fill;
    $pdf->Ln();
}
# footer
$pdf->Cell(15,7,'',0,1);
$pdf->Cell(15,7,'',0,1);
$pdf->Cell(15,7,'',0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(325,10,'Pekanbaru, 30 Juli 2021',0,1,'C');
$pdf->Cell(15,7,'',0,1);
$pdf->SetFont('Times','',12);
$pdf->Cell(325,10,'Admin',0,1,'C');

# output file PDF
$pdf->Output();
?>