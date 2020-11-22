<link rel="stylesheet" type="text/css" href="../table.css">
<link rel="stylesheet" type="text/css" href="style5.css">
<div class="container">
<center>
<h2>DATA SIMPANAN</h2>
<table border="1" class="table" cellpadding="10">
    <tr style="background-color:rgb(0, 110, 255);color:white;">
        <th>No</th>
        <th>Member</th>
        <th>Saldo</th>
        <th>Tanggal</th>
        <th>Nama User</th>
    </tr>
        <?php
        include 'Includes/Koneksi.php';
        $halaman = 10;
        $page = isset($_GET['halaman']) ? (int)$_GET["halaman"]:1;
        $mulai = ($page>1) ? ($page * $halaman) - $halaman :0;
        $query2 = mysqli_query($conn,"SELECT nama_user,member,saldo,DATE_FORMAT(tanggal, '%d-%m-%Y, %k:%i') as tanggal FROM saldo WHERE no_user='$_SESSION[No_anggota]' ORDER BY member ASC") or die(mysqli_error($conn));
        $query = mysqli_query($conn,"SELECT nama_user,member,saldo,DATE_FORMAT(tanggal, '%d-%m-%Y, %k:%i') as tanggal FROM saldo WHERE no_user='$_SESSION[No_anggota]' ORDER BY member ASC LIMIT $mulai,$halaman") or die(mysqli_error($conn));
        $total = mysqli_num_rows($query2);
        $pages = ceil($total/$halaman);
        $no = 0;
        while ($array=mysqli_fetch_array($query)){
        $saldo = number_format($array['saldo']);
        $no++;
        echo"   
        <tr>
        <td>$no</td>
        <td>$array[member]</td>
        <td>Rp$saldo</td>
        <td>$array[tanggal]</td>
        <td>$array[nama_user]</td>
        </tr>
        ";
        }
        ?>
</table>
        Halaman<br><br>
        <?php for ($i=1; $i<=$pages; $i++){echo "<a href='?leftindex=DataSimpanan&halaman= $i' class='pagination'>$i</a>";}?>
</center>
</div>
