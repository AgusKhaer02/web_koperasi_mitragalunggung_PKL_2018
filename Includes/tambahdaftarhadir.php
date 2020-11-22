<?php
include 'Koneksi.php';
$nama = $_POST['nama'];
$unit = $_POST['unit'];
$query = "INSERT INTO daftar_hadir SET no=NULL,nama='$nama',Unit_kerja='$unit'";
mysqli_query($conn,$query);
echo "<script>
alert('Data berhasil ditambahkan');
document.location.href = '../Halaman/editDaftarHadir.php';
</script>
";
?>