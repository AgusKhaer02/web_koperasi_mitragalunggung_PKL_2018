<?php
include 'Koneksi.php';
$no = $_GET['no'];
$no_simpanan = $_GET['no_simpanan'];
$nama = $_GET['nama'];
$hari = $_GET['hari'];
$bulan = $_GET['bulan'];
$tahun = $_GET['tahun'];
$besar = $_GET['besar'];
$tanggal = $tahun.'-'.$bulan.'-'.$hari;
$query = "UPDATE FROM data_simpanan SET No_Simpanan='$no_simpanan',Nama='$nama',Tanggal_Simpanan='$tanggal',Besar_Simpanan='$besar' WHERE no='$no'";
mysqli_query($conn,$query);
echo "<script>
alert('Data berhasil di edit');
</script>
";
?>