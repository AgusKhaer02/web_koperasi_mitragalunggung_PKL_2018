<?php
include 'Koneksi.php';
$no_sim = $_GET['No_Simpanan'];
$query = "DELETE FROM data_simpanan WHERE No_Simpanan='$no_sim'";
mysqli_query($conn,$query);
echo "<script>
alert('Data berhasil dihapus');
document.location.href = '../Halaman/InputDataSimpanan.php';
</script>
";
?>