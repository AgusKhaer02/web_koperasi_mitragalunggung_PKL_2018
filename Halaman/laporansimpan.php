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

$pdf->SetFont('Arial','B',13);
#------------isi dari data
include '../Includes/Koneksi.php';
if (isset($_GET['nosimpan'])){
    $sm = "AND no_simpan='$_GET[nosimpan]'";
}
else{
    $sm = "ORDER BY tanggal_simpanan DESC LIMIT 1";
}
$query=mysqli_query($conn,"SELECT * FROM simpan WHERE no_user='$_SESSION[No_anggota]' $sm");
$num_rows=mysqli_num_rows($query);
if ($num_rows > 0){
while ($show=mysqli_fetch_array($query)){
    $pdf->SetFont('Arial','I',10);
    $pdf->Cell(0,7,'No Simpanan',0,1,'C');
    $pdf->Cell(0,7,$show['no_simpan'],0,1,'C');
    $pdf->Cell(0,7,'Member :'.$show['member'],0,1,'C');
    $pdf->Cell(0,7,'No User',0,1,'R');
    $pdf->SetFont('Arial','B',13);
    $pdf->Cell(0,7,$show['no_user'],0,1,'R');
    $pdf->SetFont('Arial','I',10);
    $pdf->Cell(0,7,'Dari',0,1,'R');
    $pdf->SetFont('Arial','B',13);
    $pdf->Cell(0,7,$show['user'],0,1,'R');
    $pdf->SetFont('Arial','I',10);
    $pdf->Cell(0,7,'Di verifikasi oleh',0,1,'R');
    $pdf->SetFont('Arial','B',13);
    $pdf->Cell(0,7,'Putri Lestafauzi',0,0,'R');
    $pdf->Ln(9);
    $pdf->Cell(50,9,'Simpanan Pokok     : '.$show['simpanan_pokok'],0,0);
    $pdf->Ln(9);
    $pdf->Cell(35,9,'Simpanan Wajib     : '.$show['simpanan_wajib'],0,0);
    $pdf->Ln(9);
    $pdf->Cell(35,9,'Simpanan Sukarela  : '.$show['simpanan_sukarela'],0,0);
    $pdf->Ln(9);
    $pdf->Cell(30,9,'Total              : '.$show['total'],0,0);
    $pdf->Ln(9);
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