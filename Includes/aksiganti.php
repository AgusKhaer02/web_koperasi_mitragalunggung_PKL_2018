<style type="text/css">
.invisible{
    opacity:0px;
}
</style>
<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$JK = $_POST['jk'];
#tll-------------------
$kota = $_POST['ttlkt'];
$hari = $_POST['ttlhr'];
$bulan = $_POST['ttlbln'];
$tahun = $_POST['ttlthn'];
$TTL= $kota.','.$hari.' '.$bulan.' '.$tahun;
#----------------------
$email = $_POST['email'] ;
$no_telp = '62'.$_POST['no_telp'];
$jurusan = $_POST['jurusan'];
$new_pass = $_POST['pass'];
$status = $_POST['status'];

$query = "UPDATE anggota SET nama='$nama',alamat='$alamat',jk='$JK',TTL='$TTL',Email='$email',No_telp='$no_telp',Jurusan='$jurusan',Password='$new_pass' WHERE No_anggota='$_SESSION['No_user']'";
echo "<input type="">";
mysqli_query($conn.$query);
?>