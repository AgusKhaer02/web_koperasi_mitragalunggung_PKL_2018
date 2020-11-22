<style type="text/css">
    .input td{
        padding:20px;
    }
</style>
<div class="container">
<font size="6">Masukan No Simpan</font>
<table class="input">
<tr>
    <form action="Halaman/laporansimpan.php" method="GET">
    <td><input type="number" name="nosimpan" placeholder="No Simpan" class="textbox" required></td><td><input type="submit" value="Cetak" class="button"></input></td>
    </form>
</tr>
<tr>
    <td><a href="Halaman/cetak_all_simpan.php">Cetak Semua Data</a></td>
</tr>
</table>
</div>