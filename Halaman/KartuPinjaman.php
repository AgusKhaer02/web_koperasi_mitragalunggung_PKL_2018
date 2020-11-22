<center>
<style type="text/css">
        .table{
                border:1px solid gray;
        }
        .table td,th{
                border:1px solid gray;
                padding:5px;
        }
        .border{
    padding:2px;
    width:99.5%;
    background-color:black;
}
</style>
<img src="Gambar/logo-koperasiindonesia.png" width="140"height="140"><h2>KOPERASI SUKAPURA MITRA GALUNGGUNG<br/>
STMIK TASIKMALAYA</h2>
Sekretariat: Kampus 3 STMIK TASIKMALAYA, Jl.RE Martadinata no 272 C<br/>
Telp.(0265) 310830 Kota Tasikmalaya<br/>
<div class="border">
</div>
<p style="font-size:30px;">KARTU PINJAMAN KOPERASI</p>
<a href="Halaman/KartuKoperasi.php">Masuk untuk mengubah data</a>
<table class="table">
<tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Tanggal Pembayaran</th>
        <th rowspan="2">Besar Pinjaman</th>
        <th rowspan="2">Angsuran Bulanan</th>
        <th rowspan="2">Saldo Pinjaman</th>
</tr>
<tr>
</tr>
<?php
        include("Includes/Koneksi.php");
        $query=mysqli_query($conn,"SELECT * FROM kartu_pinjaman_koperasi");
        while ($show=mysqli_fetch_array($query)){
                echo"
                <tr>
                        <td>$show[no]</td>
                        <td>$show[Tanggal_pembayaran]</td>
                        <td>$show[besar_pinjaman]</td>
                        <td>$show[Angsuran_Bulanan]</td>
                        <td>$show[Saldo_Peminjaman]</td>
                <tr>
                ";
        }
?>
</table>
</center>