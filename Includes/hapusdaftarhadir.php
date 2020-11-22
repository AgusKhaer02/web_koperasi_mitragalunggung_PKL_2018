<?php
include 'Koneksi.php';
$no = $_GET['no'];
$query = "DELETE FROM daftar_hadir WHERE no='$no'";
mysqli_query($conn,$query);
echo "<script>
alert('Data berhasil dihapus');
document.location.href = '../Halaman/editDaftarHadir.php';
</script>
";
?>