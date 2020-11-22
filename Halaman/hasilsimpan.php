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
$query = mysqli_query($conn,"SELECT simpan.no_simpan,simpan.no_user,simpan.member,simpan.tanggal_simpanan,simpan.simpanan_pokok,simpan.simpanan_wajib,simpan.simpanan_sukarela,simpan.total,saldo.saldo FROM simpan INNER JOIN saldo ON simpan.no_user = saldo.no_user and simpan.tanggal_simpanan = saldo.tanggal WHERE simpan.no_user='$_SESSION[No_anggota]' ORDER BY simpan.tanggal_simpanan DESC LIMIT 1") or die(mysqli_error($conn));
if ($numrows = mysqli_num_rows($query) > 0 ){
    while ($tampil = mysqli_fetch_assoc($query)){
            $no_simpanan = $tampil['no_simpan'];
            $no_user = $tampil['no_user'];
            $member = $tampil['member'];
            $tanggal_simpanan = $tampil['tanggal_simpanan'];
            $simpanan_pokok = $tampil['simpanan_pokok'];
            $simpanan_wajib = $tampil['simpanan_wajib'];
            $simpanan_sukarela = $tampil['simpanan_sukarela'];
            $total = $tampil['total'];
            $saldo = $tampil['saldo'];
    }
}else{

}
?>
<div class="container">
<center>
<br/>
<h2 class="h2">Simpan Sukses!</h2>
<p>Silahkan cek email anda untuk melihat konfirmasi simpan dari kami</p>
</center>
<b>No Simpanan : <?php echo $no_simpanan;?></b><br/>
no_user : <?php echo $no_user;?><br/>
Kepada : <?php echo $member;?><br/>
Tanggal Simpanan : <?php echo $tanggal_simpanan;?><br/>
Simpanan Pokok : <?php echo $simpanan_pokok;?><br/>
Simpanan Wajib : <?php echo $simpanan_wajib;?><br/>
Simpanan Sukarela : <?php echo $simpanan_sukarela;?><br/>
Total : <?php echo $total;?><br/>
Saldo anda saat ini : <?php echo $saldo;?><br/>
    Cetak Laporan Anda Disini<br/><br/>
    <a href="Halaman/laporansimpan.php" target="_blank" id="button-success">Cetak Laporan</a><br/><br/>
    <a href="#" onclick="back()">Kembali</a>
</div>
<script>
function back(){
    document.location.href = 'menuutama.php?leftindex=Simpan';
}
</script>