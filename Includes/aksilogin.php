<?php
session_start();
include 'Koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM anggota WHERE email='$email' and password='$password'";
$e = mysqli_query($conn,$query);
$numrows = mysqli_num_rows($e);
if($numrows > 0){
        $r = mysqli_fetch_assoc($e);
        $_SESSION['No_anggota'] = $r['No_anggota'];
        $_SESSION['nama_user'] = $r['Nama'];
        $_SESSION['alamat_user'] = $r['Alamat'];
        $_SESSION['email_user'] = $r['Email'];
        $_SESSION['JK_user'] = $r['JK'];
        $_SESSION['Notelp_user'] = $r['No_telp'];
        $_SESSION['TTL'] = $r['TTL'];
        $_SESSION['Jurusan'] = $r['Jurusan'];
        $_SESSION['Foto'] = $r['foto'];
        $_SESSION['Status'] = $r['Status'];
        $verifyYESNO = $r['activated'];
        if ($verifyYESNO == "Y"){
            if ($r['Status'] == "User"){
            echo "<script>
            alert('Login Sukses!');
            document.location.href='../menuutama.php';
            </script>";
            }
            elseif($r['Status'] == "Member"){
            echo "
            <script>
            alert('Login sukses');
            document.location.href = '../menuutama2.php';
            </script>
            ";
            }
            else{
                echo "<script>
                alert('Error : Status tidak di ketahui');
                document.location.href = '../index.php';
                </script>";
            }
        }else{
        echo "
        <script>
        alert('Anda belum melakukan aktivasi akun,silahkan aktivasi akun anda');
        document.location.href = '../index.php';
        </script>
        ";
        session_destroy();
        }
}else{
    echo "<script>
    alert('Username atau Password tidak valid');
    document.location.href = '../index.php';
    </script>";
}
?>