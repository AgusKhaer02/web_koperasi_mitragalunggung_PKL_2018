<style type="text/css">
    .input td{
        padding:20px;
    }
</style>
<div class="container">
<font size="6">Masukan No Pinjam</font>
<table class="input">
<tr>
    <form action="Halaman/laporanpinjam.php" method="GET">
    <td><input type="number" name="nopinjam" placeholder="No Pinjam" class="textbox" required></td><td><input type="submit" value="Cetak" class="button"></input></td>
    </form>
</tr>
</table>
<a href="Halaman/cetak_all_pinjam.php">Cetak Semua Data</a>
</div>