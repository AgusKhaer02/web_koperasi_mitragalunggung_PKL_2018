<?php
include 'Koneksi.php';
$nama= $_POST['nama'];
$No_Simpan= $_POST['no_simpanan'] ;
$hari = $_POST['hari'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$tanggal = $tahun.'/'.$bulan.'/'.$hari;
$Besar= $_POST['besar'];
$query = "INSERT INTO data_simpanan SET NO=NULL,No_Simpanan='$No_Simpan',Nama='$nama',Tanggal_Simpanan='$tanggal',Besar_Simpanan='$Besar'";
mysqli_query($conn,$query);
echo "<script>
alert('Data Berhasil Ditambahkan');
document.location.href = '../Halaman/InputDataSimpanan.php';
</script>
";
?>