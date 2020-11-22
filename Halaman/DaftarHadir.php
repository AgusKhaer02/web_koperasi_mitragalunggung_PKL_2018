<center>
<style type="text/css">
        .table{
                border:1px solid gray;
        }
        .table td,th{
                border:1px solid gray;
                padding:10px;
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
<p style="font-size:30px;">DAFTAR HADIR RAPAT KOPERASI</p>
<a href="Halaman/editDaftarHadir.php">Masuk untuk mengubah data</a>
<table class="table">
<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Unit Kerja</th>
</tr>
<?php
        include("Includes/Koneksi.php");
        $query=mysqli_query($conn,"SELECT * FROM daftar_hadir");
        while ($show=mysqli_fetch_array($query)){
                echo"
                <tr>
                        <td>$show[No]</td>
                        <td>$show[Nama]</td>
                        <td>$show[Unit_kerja]</td>
                <tr>
                ";
        }
?>
</table>
</center>