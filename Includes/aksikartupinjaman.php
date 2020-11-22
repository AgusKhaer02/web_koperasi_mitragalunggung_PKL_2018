<?php
include 'Koneksi.php';
$hari = $_POST['hari'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$tanggal = $tahun.'/'.$bulan.'/'.$hari;
$besar_pinjam = $_POST['besar_pinjam'];
$angsuran_bulanan = $_POST['angsuran_bulanan'];
$saldo_bulanan = $_POST['saldo_bulanan'];
$query = "INSERT INTO kartu_pinjaman_koperasi SET no=NULL,tanggal_pembayaran='$tanggal',besar_pinjaman='$besar_pinjam',angsuran_bulanan='$angsuran_bulanan',saldo_peminjaman='$saldo_bulanan'";
mysqli_query($conn,$query);
echo "<script>
alert('Data berhasil ditambahkan');
document.location.href = '../Halaman/KartuKoperasi.php';
</script>
";
?>