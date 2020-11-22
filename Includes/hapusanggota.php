<?php
    if (isset($_GET['no_anggota'])){
    include 'Koneksi.php';
    $no_anggota = $_GET['no_anggota'];
    mysqli_query($conn,"DELETE FROM anggota WHERE No_anggota='$no_anggota'")or die (mysqli_error($conn));
    echo "
    <script>
    alert('Data tersebut berhasil di hapus');
    document.location.href = '../menuutama.php?leftindex=Daftaranggota';
    </script>";
    }
?>