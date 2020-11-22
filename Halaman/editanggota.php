<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="http://resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php
$no = $_GET['no_anggota'];
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$jk = $_GET['jk'];
$email = $_GET['email'];
$no_telp = $_GET['no_telp'];
$jurusan = $_GET['jurusan'];
$status = $_GET['status'];
?>
<form action="" method="post">
<div class="container">
<table>
<tr>
    <td>Nama</td>
    <td><input type="text" value="<?php echo $nama;?>" class="textbox"name="nama"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><input type="text" value="<?php echo $alamat;?>" class="textbox"name="alamat"></td>
</tr>
<tr>
    <td>JK</td>
    <td>
    <select name="jk" class="textbox">
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select>
    </td>
</tr>
<tr>
    <td>Tempat,Tanggal Lahir</td>
    <td><input type="text" name="tempat" class="textbox" placeholder="Kota">
    <input type="text" name="ttl" id="tanggal" placeholder="Tanggal">
    </td>
</tr>
<tr>
    <td>Email</td>
    <td><input type="text" value="<?php echo $email;?>" class="textbox"name="email"></td>
</tr>
<tr>
    <td>No Telp</td>
    <td><input type="text" value="<?php echo $no_telp;?>" class="textbox"name="no_telp"></td>
</tr>
<tr>
    <td>Jurusan</td>
    <td><input type="text" value="<?php echo $jurusan?>" class="textbox"name="jurusan"></td>
</tr>
<tr>
    <td>Status</td>
    <td><input type="text" value="<?php echo $status?>" class="textbox"name="status"></td>
</tr>
<tr>
    <td colspan="2"><input type="submit" class="button"value="Ubah"></td>
</tr>
</table>
</form>
<?php
include 'Includes/Koneksi.php';
if (isset($_POST['nama'])){
    $nama2 = $_POST['nama'];
    $alamat2 = $_POST['alamat'];
    $jk2 = $_POST['jk'];
    $tempat2 = $_POST['tempat'];
    $ttl2 = $_POST['ttl'];
    $email2 = $_POST['email'];
    $no_telp2 = $_POST['no_telp'];
    $jurusan2 = $_POST['jurusan'];
    $status2 = $_POST['status'];
    $ubah = mysqli_query($conn,"UPDATE anggota SET nama='$nama2',alamat='$alamat2',jk='$jk2',TTL='$ttl2',tempat_lahir='$tempat2',email='$email2',no_telp='$no_telp2',jurusan='$jurusan2',status='$status2' WHERE No_anggota='$no'") or die(mysqli_query($conn));
    if ($ubah){
        echo "<font style='background-color:green;color:white;'>Data telah berhasil diubah</font>";
    }
}else{
    echo "error";
}
?>
</div>
<script>
    $(document).ready(function(){
        $("#tanggal").datepicker({
            dateFormat:'yy-mm-dd'
        });
    });
</script>