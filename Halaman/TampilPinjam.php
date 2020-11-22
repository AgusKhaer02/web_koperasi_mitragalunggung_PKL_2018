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
    $csv ->pinjam_import($_FILES['files']['tmp_name']);
}
if (isset($_POST['exp'])){
    $csv->pinjam_export();
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

<center>
<form action="" method="POST">
Masukan No Pinjam<br/>
<input type="number" name="no" class="textbox">
</form>
<table border="1"class="table">
<tr style="background-color:rgb(0, 110, 255);color:white;">
<th>No Pinjam</th>
<th>No user</th>
<th>User</th>
<th>Member</th>
<th>Jumlah Simpanan</th>
<th>Bunga Pertahun</th>
<th>Tenor</th>
<th>Biaya Administrasi</th>
<th>Total</th>
<th>Keterangan</th>
</tr> 
<?php
    error_reporting(0);
    include 'Includes/Koneksi.php';
    if (isset($_POST['no'])){
        $no = $_POST['no'];
        if (!empty($no)){
            $w = "and no_pinjam='$no'";
        }
        else{
            $w = "";
        }
    }
    $query=mysqli_query($conn,"SELECT * FROM pinjam WHERE member='$_SESSION[nama_user]' $w");
    $numrows=mysqli_num_rows($query);
    if ($numrows > 0){
    while ($show=mysqli_fetch_array($query)){
        echo"
        <tr>
            <td>$show[no_pinjam]</td>
            <td>$show[no_user]</td>
            <td>$show[user]</td>
            <td>$show[member]</td>
            <td>$show[jumlah_pinjaman]</td>
            <td>$show[bunga_pertahun]</td>
            <td>$show[tenor]</td>
            <td>$show[biaya_administrasi]</td>
            <td>$show[total]</td>
            <td>$show[keterangan]</td>
        </tr>
        ";
    }
    }else{
        echo"<td colspan='10'><p align='center'>Data Tidak Tersedia</p></td>";
    }
?>
</table>
</center>