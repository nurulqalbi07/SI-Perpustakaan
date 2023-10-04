<?php

// memanggil library FPDF

require('fpdf181/fpdf.php');

// intance object dan memberikan pengaturan halaman PDF

$pdf = new FPDF('l','mm','legal');

// membuat halaman baru

$pdf->AddPage();

// setting jenis font yang akan digunakan

$pdf->SetFont('Arial','B',16);

// mencetak string

$pdf->Cell(325,7,'STMIK Profesional Makassar',0,1,'C');

$pdf->SetFont('Arial','B',12);

$pdf->Cell(325,7,'DAFTAR ANGGOTA PERPUSTAKAAN',0,1,'C');

 

// Memberikan space kebawah agar tidak terlalu rapat

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'TAHUN AJARAN',1,0,'C');
$pdf->Cell(50,6,'JURUSAN',1,0,'C');
$pdf->Cell(60,6,'NAMA ANGGOTA',1,0,'C');
$pdf->Cell(60,6,'TEMPAT TANGGAL LAHIR',1,0,'C');
$pdf->Cell(40,6,'JENIS KELAMIN',1,0,'C');
$pdf->Cell(30,6,'NO. TELPON',1,0,'C');
$pdf->Cell(60,6,'ALAMAT',1,1,'C');
$pdf->SetFont('Arial','',10);

include 'koneksi.php';

$anggota = mysqli_query($conn, "select * from anggota");
$no = 1;
$list_peserta = mysqli_query($conn, "SELECT * FROM anggota ");
    while($row = mysqli_fetch_array($list_peserta)){
    
    $pdf->Cell(30,6,$row['thn_ajaran'],1,0,'C');
    $pdf->Cell(50,6,$row['jurusan_anggota'],1,0);
    $pdf->Cell(60,6,$row['nama_anggota'],1,0);
    $pdf->Cell(60,6,$row['tmp_lahir'].', '.$row['tgl_lahir'],1,0);
    $pdf->Cell(40,6,$row['jk_anggota'],1,0);
    $pdf->Cell(30,6,$row['notelp_anggota'],1,0);
    $pdf->Cell(60,6,$row['alamat_anggota'],1,1);
}

$pdf->Output();

?>