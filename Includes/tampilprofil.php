<?php
include '../Includes/Koneksi.php';
$email = $_POST['email'];
$pass  = $_POST['password'];
$sql = "SELECT * FROM akun WHERE email='$email' and password ='$pass'";
$query = mysqli_query($conn,$sql);
while  ($tampilkan = mysqli_fetch_array($query)){
    $_REQUEST['nama'] = $tampilkan['nama'];
}    
?>