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
<a style="font-size:35px;color:black;margin-left:10px;font-family:'Arial';">FORM SIMPAN</a>
<center>
<form action="Includes/aksisimpan.php" method="POST">
    <div class="form-input">
<table>
    <tr>
    <td align="right">Member</td><td>
    <div class="ui-widget">
        <input type="text" name="member" class="textbox" id="cari">
    </div>
    </td>
    </tr>
    <tr>
    <td align="right">Simpanan Pokok</td>
    <td>
        <input type="text" name="pokok" class="textbox" value="0"style="height:25px;width:350px;" onclick="clear();" onkeyup="sum();" id="simpanan_pokok"></input>
    </td>
    </tr>
    <tr>
    <td align="right">Simpanan Wajib</td>
    <td>
        <input type="text" name="wajib" class="textbox" value="0"style="height:25px;width:350px;"onkeyup="sum();" id="simpanan_wajib"></input>
    </td>
    </tr>
    <tr>
    <td align="right">Simpanan Sukarela</td>
    <td>
        <input type="text" name="sukarela" class="textbox" value="0" style="height:25px;width:350px;" onkeyup="sum();" id="simpanan_sukarela"></input>
    </td>
    </tr>
    <tr>
    <td align="right">Total</td>
    <td>
        <input type="text" name="total" class="textbox" value="0"style="height:25px;width:350px;" id="txttotal" readonly></input>
    </td>
    </tr>
    <tr>
        <td></td><td><input type="submit" value="simpan" class="button" style="cursor:pointer;"></input></td>
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
<script type="text/javascript">
function sum() {
      var txtFirstNumberValue = document.getElementById('simpanan_pokok').value;
      var txtSecondNumberValue = document.getElementById('simpanan_wajib').value;
      var txtThirdNumberValue = document.getElementById('simpanan_sukarela').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue) + parseInt(txtThirdNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txttotal').value = result;
      }
}
</script>