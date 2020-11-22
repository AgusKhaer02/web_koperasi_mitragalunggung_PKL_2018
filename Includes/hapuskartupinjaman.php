<?php
include 'Koneksi.php';
$no = $_GET['no'];
$query = "DELETE FROM kartu_pinjaman_koperasi WHERE no='$no'";
mysqli_query($conn,$query);
echo "<script>
alert('Data berhasil dihapus');
document.location.href = '../Halaman/KartuKoperasi.php';
</script>
";
?>