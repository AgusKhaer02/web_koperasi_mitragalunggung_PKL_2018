<link rel="stylesheet" type="text/css" href="../table.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="http://resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div class="container">
<center>
<h2>RIWAYAT TRANSAKSI</h2>
<form action=""method="post">
Pilih Jenis Transaksi
<select name="riwayat">
    <option value="Simpan">Simpan</option>
    <option value="Pinjam">Pinjam</option>
</select>
Nama Member
<input type="text" name="member" id="cari">
Tanggal
<input type="text" name="Tanggal" id="tanggal" placeholder="dd-mm-yy">
<button type="submit"><img src="Gambar/icons/reload.png" style="cursor:pointer;" width="25" height="25"></button>
</form>
<?php
    include 'Includes/Koneksi.php';
    if (isset($_POST['riwayat'])){
        $idx = $_POST['riwayat'];
    }else{
        $idx = "Simpan";
    }
        switch ($idx){
            case 'Simpan':
            $no=0;
            echo "
            <table border='1' cellpadding='10'>
                <tr style='background-color:rgb(0, 110, 255);color:white;'>
                    <th>No</th>
                    <th>No Simpan</th>
                    <th>Nama User</th>
                    <th>Member</th>
                    <th>Tanggal Simpan</th>
                    <th>Simpanan Pokok</th>
                    <th>Simpanan Wajib</th>
                    <th>Simpanan Sukarela</th>
                    <th>Total</th>
                </tr>
            ";
            if (isset($_POST['member'])){
                if ($_POST['member'] !== ""){
                    if (isset($_POST['Tanggal']) && $_POST['Tanggal'] !== ""){
                    $tanggal = $_POST['Tanggal'];
                    $member = $_POST['member'];
                    $query = mysqli_query($conn,"SELECT no_simpan,user,member,DATE_FORMAT(tanggal_simpanan, '%d-%m-%Y, %k:%i') as tanggal_simpanan,simpanan_pokok,simpanan_wajib,simpanan_sukarela,total FROM simpan WHERE no_user='$_SESSION[No_anggota]' and member='$member' and tanggal_simpanan LIKE '$tanggal%'") or die(mysqli_error($conn));
                }
                    else{
                        $member = $_POST['member'];
                        $query = mysqli_query($conn,"SELECT no_simpan,user,member,DATE_FORMAT(tanggal_simpanan, '%d-%m-%Y, %k:%i') as tanggal_simpanan,simpanan_pokok,simpanan_wajib,simpanan_sukarela,total FROM simpan WHERE no_user='$_SESSION[No_anggota]' and member='$member' ORDER BY tanggal_simpanan DESC") or die(mysqli_error($conn));
                    }
                }
               else{
                    $query = mysqli_query($conn,"SELECT no_simpan,user,member,DATE_FORMAT(tanggal_simpanan, '%d-%m-%Y, %k:%i') as tanggal_simpanan,simpanan_pokok,simpanan_wajib,simpanan_sukarela,total FROM simpan WHERE no_user='$_SESSION[No_anggota]' ORDER BY tanggal_simpanan DESC") or die(mysqli_error($conn));
                }
            }else{
                $query = mysqli_query($conn,"SELECT no_simpan,user,member,DATE_FORMAT(tanggal_simpanan, '%d-%m-%Y, %k:%i') as tanggal_simpanan,simpanan_pokok,simpanan_wajib,simpanan_sukarela,total FROM simpan WHERE no_user='$_SESSION[No_anggota]' ORDER BY tanggal_simpanan DESC") or die(mysqli_error($conn));
            }
            if ($numrows = mysqli_num_rows($query) <= 0){
                echo "
                <tr>
                    <td colspan='9'><p align='center'>Data Tidak Tersedia</p></td>
                </tr>
                ";
            }else{
            while ($simpan = mysqli_fetch_array($query)){
                $simpanan_pokok = number_format($simpan['simpanan_pokok']);
                $simpanan_wajib = number_format($simpan['simpanan_wajib']);
                $simpanan_sukarela = number_format($simpan['simpanan_sukarela']);
                $total = number_format($simpan['total']);
                $no++;
                echo "
                <tr>
                    <td>$no</td>
                    <td>$simpan[no_simpan]</td>
                    <td>$simpan[user]</td>
                    <td>$simpan[member]</td>
                    <td>$simpan[tanggal_simpanan]</td>
                    <td>Rp$simpanan_pokok</td>
                    <td>Rp$simpanan_wajib</td>
                    <td>Rp$simpanan_sukarela</td>
                    <td>Rp$total</td>
                </tr>
                ";
                }
            }
            echo "</table>";
            break;
            case 'Pinjam':
            $halaman = 10;
            $page = isset($_GET['halaman']) ? (int)$_GET["halaman"]:1;
            $mulai = ($page>1) ? ($page * $halaman) - $halaman :0;
            $no=0;
            echo "
            <table border='1' cellpadding='10'>
                <tr style='background-color:rgb(0, 110, 255);color:white;'>
                    <th>No</th>
                    <th>No Pinjam</th>
                    <th>Nama User</th>
                    <th>Member</th>
                    <th>Jumlah Pinjaman</th>
                    <th>Tanggal Pinjaman</th>
                    <th>Bunga Pertahun</th>
                    <th>Tenor</th>
                    <th>Biaya Administrasi</th>
                    <th>Total</th>
                    <th>Keterangan</th>
                </tr>
            ";
            if (isset($_POST['member'])){
                if ($_POST['member'] !== ""){
                    $member = $_POST['member'];
                    $query = mysqli_query($conn,"SELECT no_pinjam,user,member,jumlah_pinjaman,DATE_FORMAT(tanggal_pinjaman, '%d-%m-%Y, %k:%i') as tanggal_pinjaman,bunga_pertahun,tenor,biaya_administrasi,total,keterangan FROM pinjam WHERE no_user='$_SESSION[No_anggota]' and member='$member' LIMIT $mulai,$halaman") or die(mysqli_error($conn));

                }else{
                    $query = mysqli_query($conn,"SELECT no_pinjam,user,member,jumlah_pinjaman,DATE_FORMAT(tanggal_pinjaman, '%d-%m-%Y, %k:%i') as tanggal_pinjaman,bunga_pertahun,tenor,biaya_administrasi,total,keterangan FROM pinjam WHERE no_user='$_SESSION[No_anggota]'") or die(mysqli_error($conn));
                }
            }else{
                $query = mysqli_query($conn,"SELECT no_pinjam,user,member,jumlah_pinjaman,DATE_FORMAT(tanggal_pinjaman, '%d-%m-%Y, %k:%i') as tanggal_pinjaman,bunga_pertahun,tenor,biaya_administrasi,total,keterangan FROM pinjam WHERE no_user='$_SESSION[No_anggota]'") or die(mysqli_error($conn));
            }
            if ($numrows = mysqli_num_rows($query) <= 0){
                echo "
                <tr>
                    <td colspan='11'><p align='center'>Data Tidak Tersedia</p></td>
                </tr>
                ";
            }else{
            while ($pinjam = mysqli_fetch_array($query)){
                $jumlah_pinjaman = number_format($pinjam['jumlah_pinjaman']);
                $biaya_administrasi = number_format($pinjam['biaya_administrasi']);
                $total = number_format($pinjam['total']);
                $no++;
                echo "<tr>
                <td>$no</td>
                <td>$pinjam[no_pinjam]</td>
                <td>$pinjam[user]</td>
                <td>$pinjam[member]</td>
                <td>Rp$jumlah_pinjaman</td>
                <td>$pinjam[tanggal_pinjaman]</td>
                <td>$pinjam[bunga_pertahun]</td>
                <td>$pinjam[tenor]</td>
                <td>Rp$biaya_administrasi</td>
                <td>$total</td>
                <td>$pinjam[keterangan]</td>
                </tr>
                ";
                }
            }
            echo "</table>";
            break;
            default:
            echo "Error";
            break;
        }
?>
</center>
</div>
<?php
    include 'Includes/Koneksi.php';
    $cari_member = mysqli_query($conn,"SELECT nama FROM anggota WHERE status='member' ORDER BY nama ASC");
        $member = "";
        while ($array = mysqli_fetch_array($cari_member)){
            $ArrMember = $array['nama'];
            $member = $member.'"'.$ArrMember.'"'.',';
        }
?>
    <script>
    $(function(){
        var pencarian = [
            <?php echo substr($member,0,-1); ?>
        ];
        $("#cari").autocomplete({
            source:pencarian
        });
    });
    $(document).ready(function(){
        $("#tanggal").datepicker({
            dateFormat:'yy-mm-dd'
        });
    });
    </script>