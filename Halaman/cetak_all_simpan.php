<?php
ob_start();
$date = date("Y-m-d");
session_start();
require('../Includes/fpdf/fpdf.php');
$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,7,'Koperasi Sukapura Mitra Galunggung',0,1,'C');
$pdf->SetFont('Arial','i',10);
$pdf->Cell(0,7,'jl RE Martadinata 271 D,Kelurahan Panyingkiran,Kec Indihiang,Kota Tasikmalaya',0,1,'C');
$pdf->Setfont('Arial','B',12);
$pdf->Cell(0,7,'Laporan Simpan',0,1,'C');
$pdf->Setfont('Arial','i',12);
$pdf->Cell(0,7,'No User',0,1);
$pdf->Cell(0,7,$_SESSION['No_anggota'],0,1);
$pdf->SetFont('Arial','B',9);
$pdf->Ln(20);
$pdf->SetFillColor(0, 97, 255);
$pdf->SetTextColor(225,225,225);
$pdf->Cell(25,7,'No Simpanan',1,0,'',true);
$pdf->Cell(38,7,'user',1,0,'',true);
$pdf->Cell(35,7,'member',1,0,'',true);
$pdf->Cell(34,7,'Tanggal Simpanan',1,0,'',true);
$pdf->Cell(30,7,'Simpanan Pokok',1,0,'',true);
$pdf->Cell(30,7,'Simpanan Wajib',1,0,'',true);
$pdf->Cell(34,7,'Simpanan Sukarela',1,0,'',true);
$pdf->Cell(30,7,'Total',1,0,'',true);
$pdf->Ln(7);
$pdf->SetTextColor(0,0,0);
#------------isi dari data
include '../Includes/Koneksi.php';
$query=mysqli_query($conn,"SELECT * FROM simpan WHERE no_user='$_SESSION[No_anggota]' order by tanggal_simpanan DESC");
$num_rows=mysqli_num_rows($query);
if ($num_rows > 0){
while ($show=mysqli_fetch_array($query)){
    $pdf->SetFont('Arial','I',9);
    $pdf->Cell(25,7,$show['no_simpan'],1,0);
    $pdf->Cell(38,7,$show['user'],1,0);
    $pdf->Cell(35,7,$show['member'],1,0);
    $pdf->Cell(34,7,$show['tanggal_simpanan'],1,0);
    $pdf->Cell(30,7,$show['simpanan_pokok'],1,0);
    $pdf->Cell(30,7,$show['simpanan_wajib'],1,0);
    $pdf->Cell(34,7,$show['simpanan_sukarela'],1,0);
    $pdf->Cell(30,7,$show['total'],1,0);
    $pdf->Ln(7);
}
}else{
    $pdf->Cell(285,6,'Data tidak ada',1,0,'C');
}
    $pdf->Ln(10);
    $pdf->SetFont('Arial','I',10);
    $pdf->Cell(0,7,'Laporan ini dibuat sebagai tanda bukti bahwa anggota yang bersangkutan telah menyimpan uang dengan nomimal tertera di atas.',0,1,'C');
function footer(){
$this->SetY(-15);
$this->SetFont('Arial','I',8);
$this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
}
$pdf->Output();
?>