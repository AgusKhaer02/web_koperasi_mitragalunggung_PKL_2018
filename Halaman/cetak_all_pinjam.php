<?php
ob_start();
$date = date("Y-m-d");
session_start();
require('../Includes/fpdf/fpdf.php');
$pdf = new FPDF('L','mm',array(210,340));
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,7,'Koperasi Sukapura Mitra Galunggung',0,1,'C');
$pdf->SetFont('Arial','i',10);
$pdf->Cell(0,7,'jl RE Martadinata 271 D,Kelurahan Panyingkiran,Kec Indihiang,Kota Tasikmalaya',0,1,'C');
$pdf->Setfont('Arial','B',12);
$pdf->Cell(0,7,'Laporan Pinjam',0,1,'C');
$pdf->Setfont('Arial','i',12);
$pdf->Cell(0,1,'No User',0,1);
$pdf->Ln(5);
$pdf->Cell(0,1,$_SESSION['No_anggota'],0,1);

$pdf->SetFont('Arial','B',9);
$pdf->Ln(20);
$pdf->SetFillColor(0, 97, 255);
$pdf->SetTextColor(225,225,225);
$pdf->Cell(22,7,'No Pinjaman',1,0,'',true);
$pdf->Cell(38,7,'User',1,0,'',true);
$pdf->Cell(35,7,'Member',1,0,'',true);
$pdf->Cell(35,7,'Jumlah Pinjaman',1,0,'',true);
$pdf->Cell(34,7,'Tanggal Pinjaman',1,0,'',true);
$pdf->Cell(30,7,'Bunga Pertahun',1,0,'',true);
$pdf->Cell(30,7,'Tenor',1,0,'',true);
$pdf->Cell(34,7,'Biaya Administrasi',1,0,'',true);
$pdf->Cell(30,7,'Total',1,0,'',true);
$pdf->Cell(40,7,'Keterangan',1,0,'',true);
$pdf->Ln(7);
$pdf->SetTextColor(0,0,0);
#------------isi dari data
include '../Includes/Koneksi.php';
$query=mysqli_query($conn,"SELECT * FROM pinjam WHERE no_user='$_SESSION[No_anggota]' order by tanggal_pinjaman ASC");
$num_rows=mysqli_num_rows($query);
if ($num_rows > 0){
while ($show=mysqli_fetch_array($query)){
    $pdf->SetFont('Arial','I',9);
    $pdf->Cell(22,7,$show['no_pinjam'],1,0);
    $pdf->Cell(38,7,$show['user'],1,0);
    $pdf->Cell(35,7,$show['member'],1,0);
    $pdf->Cell(35,7,$show['jumlah_pinjaman'],1,0);
    $pdf->Cell(34,7,$show['tanggal_pinjaman'],1,0);
    $pdf->Cell(30,7,$show['bunga_pertahun'],1,0);
    $pdf->Cell(30,7,$show['tenor'],1,0);
    $pdf->Cell(34,7,$show['biaya_administrasi'],1,0);
    $pdf->Cell(30,7,$show['total'],1,0);
    $pdf->Cell(40,7,$show['keterangan'],1,0);
    $pdf->Ln(7);
}
}else{
    $pdf->Cell(285,6,'Data tidak ada',1,0,'C');
}
    $pdf->Ln(10);
    $pdf->SetFont('Arial','I',10);
    $pdf->Cell(0,7,'Laporan ini dibuat sebagai tanda bukti bahwa anggota yang bersangkutan telah meminjam uang dengan nomimal tertera di atas.',0,1,'C');
function footer(){
$this->SetY(-15);
$this->SetFont('Arial','I',8);
$this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
}
$pdf->Output();
?>