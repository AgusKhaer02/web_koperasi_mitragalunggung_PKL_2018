<?php
session_start();
include 'Koneksi.php';
$old_pass = $_POST['old_pass'];
$query2 = "SELECT * FROM anggota where password='$old_pass' and No_anggota='$_SESSION[No_anggota]'";
$caripass = mysqli_query($conn,$query2);
$numrows = mysqli_num_rows($caripass);
if ($_POST['ttlbln'] == ""){
    echo "<script>
    alert('Masukan bulan terlebih dahulu');
    document.location.href = '../Halaman/changeprofile.php';
    </script>";
}
if ($numrows > 0){
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
    $new_pass = $_POST['new_pass'];
    if (isset($_FILES['foto'])){
        $filename = $_FILES['foto']['name'];
        $foto = uniqid().'-'.$filename;
        $filesize = $_FILES['foto']['size'];
        $fileerror = $_FILES['foto']['error'];
            if ($filesize > 0 || $fileerror == 0){
            $move = move_uploaded_file($_FILES['foto']['tmp_name'], "Gambar_user/".$foto); 
            }
            else{
                if($JK == "L"){
                    $filename = "male.png";
                }
                elseif($JK == "P"){
                    $filename = "female.png";
                }
            }
    }
    $query = "UPDATE anggota SET nama='$nama',alamat='$alamat',jk='$JK',TTL='$TTL',Email='$email',No_telp='$no_telp',Jurusan='$jurusan',Password='$new_pass',foto='$filename' WHERE No_anggota='$_SESSION[No_anggota]'";
    mysqli_query($conn,$query);
    echo "<script>
    alert('Data berhasil di ubah');
    document.location.href = '../Halaman/relogin.php';
    </script>";
    }else{
    echo "<script>
    alert('Password lama tidak valid');
    document.location.href = '../Halaman/changeprofile.php';
    </script>";
}
?>