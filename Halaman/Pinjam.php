<style type="text/css">
.form-input {
    width:40%;
    height:40%;
    padding :30px;
    margin-top:20px;
    background-color:#dddddd;
}
table td{
    padding-right:9px;
    padding-left:9px;
    padding-top:3px;
    padding-bottom:3px;
}
</style>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="http://resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<a style="font-size:35px;color:black;margin-left:10px;font-family:Arial;">FORM PINJAM</a>
<center>
<form action="Includes/aksipinjam.php" method="POST">
    <div class="form-input">
<table>
    <tr>
    <td align="right">Member</td><td>
    <input type="text" class="textbox"name="member" id="cari">
    </td>
    </tr>
    <tr>
    <td align="right">Jumlah Pinjaman</td>
    <td>
        <input type="number" name="jumlah" class="textbox" onkeyup="sum()" value="0"style="height:25px;width:350px;" id="jumlah"></input>
    </td>
    </tr>
    <tr>
    <td align="right">Bunga % Per Tahun</td>
    <td>
        <input type="text" name="bunga" class="textbox" style="height:25px;width:350px;"></input>
    </td>
    </tr>
    <tr>
    <td align="right">Tenor</td>
    <td>
        <select name="tenor" class="textbox" style="height:25px;width:350px;">
        <option value="">Pilih</option>
        <option value="6 Bulan">6 bulan</option>
        <option value="12 Bulan">12 Bulan</option>
        <option value="18 Bulan">18 Bulan</option>
        <option value="24 Bulan">24 Bulan</option>
        <option value="36 Bulan">36 Bulan</option>
        <option value="48 Bulan">48 Bulan</option>
        </select>
    </td>
    </tr>
    <tr>
    <td align="right">Biaya Administrasi</td>
    <td>
        <input type="number" name="biaya_admin" class="textbox" onkeyup="sum()" value="0"style="height:25px;width:350px;" id="biaya_admin"></input>
    </td>
    </tr>
    <tr>
    <td align="right">Total</td>
    <td>
        <input type="number" name="total" value="0"class="textbox" style="height:25px;width:350px;" id="total" readonly></input>
    </td>
    </tr>
    <tr>
    <td align="right">Keterangan</td>
    <td>
        <input type="text" name="ket" class="textbox" style="height:25px;width:350px;"></input>
    </td>
    </tr>
    <tr>
        <td></td><td><input type="submit" value="pinjam" class="button" style="cursor:pointer;"></input></td>
    </tr>
</table>
</div>
</form>
</center>
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
    </script>
<script>
function sum(){
    var jumlah_pinjam = document.getElementById('jumlah').value;
    var biaya_admin = document.getElementById('biaya_admin').value;
    var total = parseInt(jumlah_pinjam) + parseInt(biaya_admin);
    if (!isNaN(total)){
        document.getElementById('total').value = total;
    }
}
</script>