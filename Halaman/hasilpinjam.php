<link rel="stylesheet" type="text/css" href="style4.css">
<style type="text/css">
    .h2{
    padding:50px;
    width:50%;
    background-color:green;
    letter-spacing: 5px;
    font-size: 30px;
    color:white;
    border-radius:5px;
    text-align:center;
    font-family: 'Segoe UI';
    }
    p{
        font-size:25px;
    }
    #button-success{
        background-color:rgb(66, 155, 244);
        color:white;
        padding-top:10px;
        padding-bottom:10px;
        padding-left:15px;
        padding-right:15px;
        border-radius:9px;
        cursor:pointer;
        font-size:15px;
    }
    #button-success:hover{
        background-color:rgb(113, 180, 247);
    }
    #button-success:active{
        background-color:rgb(0, 67, 135);
    }
</style>
<?php
include 'Includes/Koneksi.php';
$query = mysqli_query($conn,"SELECT pinjam.no_pinjam,pinjam.no_user,pinjam.member,pinjam.jumlah_pinjaman,pinjam.tanggal_pinjaman,pinjam.bunga_pertahun,pinjam.tenor,pinjam.biaya_administrasi,pinjam.total,pinjam.keterangan,saldo.saldo FROM pinjam INNER JOIN saldo ON pinjam.no_user = saldo.no_user and pinjam.member = saldo.member and pinjam.tanggal_pinjaman = saldo.tanggal WHERE pinjam.no_user='$_SESSION[No_anggota]' ORDER BY tanggal_pinjaman DESC LIMIT 1")or die(mysqli_error($conn));
if (mysqli_num_rows($query) > 0 ){
while ($tampil = mysqli_fetch_assoc($query)){
    $no_pinjam = $tampil['no_pinjam'];
    $no_user = $tampil['no_user'];
    $member = $tampil['member'];
    $jumlah_pinjaman = $tampil['jumlah_pinjaman'];
    $tanggal_pinjaman = $tampil['tanggal_pinjaman'];
    $bunga = $tampil['bunga_pertahun'];
    $tenor = $tampil['tenor'];
    $biaya_admin = $tampil['biaya_administrasi'];
    $total = $tampil['total'];
    $ket = $tampil['keterangan'];
    $saldo = $tampil['saldo'];
}
}else{
    $no_pinjam = "";
    $no_user = "";
    $member = "";
    $jumlah_pinjaman = "";
    $tanggal_pinjaman = "";
    $bunga = "";
    $tenor = "";
    $biaya_admin = "";
    $total = "";
    $ket = "";
    $saldo = "";
}
?>
<br/>
<div class="container">
<center>
<h2 class="h2">Pinjam Sukses!</h2>
<p>Silahkan cek email anda untuk melihat konfirmasi Pinjam dari kami</p>
</center>
<div class="left:0px;position:relative;">
<b>No Pinjaman : <?php echo $no_pinjam;?></b><br/>
no_user : <?php echo $no_user;?><br/>
Kepada : <?php echo $member;?><br/>
Jumlah Pinjaman : <?php echo $jumlah_pinjaman;?><br/>
Bunga : <?php echo $bunga;?><br/>
Tenor : <?php echo $tenor;?><br/>
Biaya Administrasi : <?php echo $biaya_admin;?><br/>
Total : <?php echo $total;?><br/>
Keterangan : <?php echo $ket;?><br/>
Saldo : <?php echo $saldo;?><br/>
</div>
    Cetak Laporan Anda Disini<br/><br/>
    <a href="Halaman/laporanpinjam.php" target="_blank" id="button-success">Cetak Laporan</a><br/><br/>
    <a href="#" onclick="back()">Kembali</a>
</div>
<script>
function back(){
    document.location.href = 'menuutama.php?leftindex=Pinjam';
}
</script>