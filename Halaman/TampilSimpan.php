<style type="text/css">
.table{
    border-style: none;
    font-style:tahoma;
    margin :50px;
    border-collapse:collapse;
    border-color:white;
}
.table td{
    padding:3px;
    border-style:groove;
}
.table tr:nth-child(odd) td{
    background-color:#e0e0e0;
}
.table tr:nth-child(even) td{
    background-color:white;
}
</style>
<?php
include 'CSV.php';
$csv = new csv();
if (isset($_POST['sub'])){
    $csv ->simpan_import($_FILES['files']['tmp_name']);
}
if (isset($_POST['exp'])){
    $csv->simpan_export();
}
?>
<!--Export dan import data-->
<div class="container">
<h3>Export dan Import Data</h3>
<form method="post" entype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="sub" value="Import" class="button">
</form>
<form method="post">
<input type="submit" name="exp" value="export" class="button">
</form>
<!--                                             -->
<center>
<form action="" method="POST">
Masukan No Simpan<br/>
<input type="number" name="no" class="textbox">
</form>
<table border="1" class="table">
<tr style="background-color:rgb(0, 110, 255);color:white;">
<th>No Simpan</th>
<th>No User</th>
<th>User</th>
<th>Member</th>
<th>Simpanan Pokok</th>
<th>Simpanan Wajib</th>
<th>Simpanan Sukarela</th>
<th>Total</th>
</tr>
<?php
error_reporting(0);
    include 'Includes/Koneksi.php';
    if (isset($_POST['no'])){
        $no = $_POST['no'];
        if (!empty($no)){
            $w = "and no_simpan='$no'";
        }
        else{
            $w = "";
        }
    }
    $query = mysqli_query($conn,"SELECT * FROM simpan WHERE member='$_SESSION[nama_user]' $w");
    $numrows=mysqli_num_rows($query);
    if ($numrows > 0){
    while ($show=mysqli_fetch_array($query)){
        echo"
        <tr>
            <td>$show[no_simpan]</td>
            <td>$show[no_user]</td>
            <td>$show[user]</td>
            <td>$show[member]</td>
            <td>$show[simpanan_pokok]</td>
            <td>$show[simpanan_wajib]</td>
            <td>$show[simpanan_sukarela]</td>
            <td>$show[total]</td>
        </tr>
        ";
    }
    }else{
        echo"<td colspan='9'><p align='center'>Data tidak tersedia</p></td>";
    }
?>
</table>
</center>
</div>