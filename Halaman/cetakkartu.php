<?php
session_start();
$foto = $_SESSION['Foto'];
ob_start();
$date = date("Y-m-d");
require('../Includes/fpdf/fpdf.php');
$pdf = new FPDF('L','mm',array(95,70));
$pdf-SetMargins(float left,float top[,float right]);
$pdf->AddPage();
$pdf->SetFillColor(0, 97, 255);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'Koperasi Sukapura Mitra Galunggung',0,1,'C',true);
$pdf->SetFont('Arial','i',9);
$pdf->Cell(0,7,'jl RE Martadinata 271 D,Kelurahan Panyingkiran,Kec Indihiang,Kota Tasikmalaya',0,1,'C',true);
$pdf->Setfont('Arial','B',9);
$pdf->Cell(0,7,'Kartu Anggota Koperasi',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Image('../Includes/Gambar_user/'.$foto,10,35,30,35);
$pdf->Ln(20);
$pdf->SetTextColor(0,0,0);
$pdf->Output();
?>