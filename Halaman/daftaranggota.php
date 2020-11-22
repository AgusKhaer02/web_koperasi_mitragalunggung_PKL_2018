<link rel="stylesheet" type="text/css" href="../table.css">
<link rel="stylesheet" type="text/css" href="style5.css">
<style type="text/css">
.button_red{
    background-color:#ff2600;
    color :#e8e8e8;
    padding:5px;
    border-radius:2px;
}
.button_yellow{
    background-color:#fcb000;
    color :#e8e8e8;
    padding:5px;
    border-radius:2px;
}
.button_red:hover{
    color:#FFFFFF;
}
.button_yellow:hover{
    color:#FFFFFF;
}
</style>
<center>
<h2>Daftar Anggota</h2>
<?php
include 'Includes/Koneksi.php';
$query = mysqli_query($conn,"SELECT * FROM anggota");
$numrows = mysqli_num_rows($query);
echo "<h1 style='position:absolute;right:100px;top:70px;'>$numrows orang</h1>";
?>
<a style="letter-spacing:5px;color:black;font-size:30px;">Koperasi Sukapura Mitra Galunggung</a><br/>
<div style="right:0px;">
    <form action="" method="POST">
    <input type="number" class="textbox" style="font-size:20px;" name="no" placeholder="No anggota"><br/><br/>
    <input type="submit" value="cari" name="btn_cari" class="button">
    </form>
</div>
<table class="table" border="1" cellpadding="10">
<tr style="background-color:rgb(0, 110, 255);color:white;">
<th>No</th>
<th>No Anggota</th>
<th>Nama Anggota</th>
<th>Alamat</th>
<th>Jenis Kelamin</th>
<th>Tempat tanggal lahir</th>
<th>Email</th>
<th>No Telepon</th>
<th>Jurusan</th>
<th>Status</th>
<th>Hapus</th>
<th>Ubah</th>
</tr>
<?php
    include 'Includes/Koneksi.php';
    $halaman = 10;
    $page = isset($_GET['halaman']) ? (int)$_GET["halaman"]:1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman :0;
    $urut = "";
    if (isset($_POST['no'])){
        $no = $_POST['no'];
        if(!empty($no)){
            $urut = "WHERE no_anggota='$no'";
            $query2 = mysqli_query($conn,"SELECT no,
            No_anggota,
            Nama,
            Alamat,
            JK,
            DATE_FORMAT(TTL, '%d-%m-%Y') as TTL,
            tempat_lahir,
            Email,
            No_telp,
            Jurusan,
            foto,
            Status FROM anggota $urut")or die(mysqli_error($conn));
            $query = mysqli_query($conn,"SELECT no,
            No_anggota,
            Nama,
            Alamat,
            JK,
            DATE_FORMAT(TTL, '%d-%m-%Y') as TTL,
            tempat_lahir,
            Email,
            No_telp,
            Jurusan,
            foto,Status FROM anggota $urut LIMIT $mulai,$halaman")or die(mysqli_error($conn));
            $number = $mulai+1;
            $total = mysqli_num_rows($query2);
            $pages = ceil($total/$halaman);
        }
        else{
            $urut = "ORDER BY no_anggota ASC";
            $query2 = mysqli_query($conn,"SELECT no,
            No_anggota,
            Nama,
            Alamat,
            JK,
            DATE_FORMAT(TTL, '%d-%m-%Y') as TTL,
            tempat_lahir,
            Email,
            No_telp,
            Jurusan,
            foto,Status FROM anggota $urut")or die(mysqli_error($conn));
            $query = mysqli_query($conn,"SELECT no,
            No_anggota,
            Nama,
            Alamat,
            JK,
            DATE_FORMAT(TTL, '%d-%m-%Y') as TTL,
            tempat_lahir,
            Email,
            No_telp,
            Jurusan,
            foto,Status FROM anggota $urut LIMIT $mulai,$halaman")or die(mysqli_error($conn));
            $number = $mulai+1;
            $total = mysqli_num_rows($query2);
            $pages = ceil($total/$halaman);
        }
    }
    else{
        $query2 = mysqli_query($conn,"SELECT no,
        No_anggota,
        Nama,
        Alamat,
        JK,
        DATE_FORMAT(TTL, '%d-%m-%Y') as TTL,
        tempat_lahir,
        Email,
        No_telp,
        Jurusan,
        foto,Status FROM anggota ORDER BY no_anggota ASC")or die(mysqli_error($conn));
        $query = mysqli_query($conn,"SELECT no,
        No_anggota,
        Nama,
        Alamat,
        JK,
        DATE_FORMAT(TTL, '%d-%m-%Y') as TTL,
        tempat_lahir,
        Email,
        No_telp,
        Jurusan,
        foto,Status FROM anggota ORDER BY no_anggota ASC LIMIT $mulai,$halaman")or die(mysqli_error($conn));
        $number = $mulai+1;
        $total = mysqli_num_rows($query2);
        $pages = ceil($total/$halaman);
    }
    while ($show=mysqli_fetch_array($query)){
        if ($show['JK'] == "L"){
            $JK = "Laki-laki";
        }
        elseif ($show['JK'] == "P"){
            $JK = "Perempuan";
        }
        else {
            $JK = "Jenis kelamin tidak di ketahui";
        }
        echo "
        <tr>
            <td>$show[no]</td>
            <td>$show[No_anggota]</td>
            <td>$show[Nama]</td>
            <td>$show[Alamat]</td>
            <td>$JK</td>
            <td>$show[tempat_lahir],$show[TTL]</td>
            <td>$show[Email]</td>
            <td>$show[No_telp]</td>
            <td>$show[Jurusan]</td>
            <td>$show[Status]</td>
            <td><a class='button_red' href='Includes/hapusanggota.php?no_anggota=$show[No_anggota]' onclick='return konfirmasihapus()'>Hapus</a></td>
            <td><a class='button_yellow' href='menuutama.php?leftindex=EditAnggota&no_anggota=$show[No_anggota]&nama=$show[Nama]&alamat=$show[Alamat]&jk=$show[JK]&email=$show[Email]&no_telp=$show[No_telp]&jurusan=$show[Jurusan]&status=$show[Status]'>Ubah</td>
        </tr>
        ";
    }
?>
</table>
Halaman<br><br>
        <?php for ($i=1; $i<=$pages; $i++){echo "<a href='?leftindex=Daftaranggota&halaman= $i' class='pagination'>$i</a>";}?>
</center>
<script>
    function konfirmasihapus(){
        var konfirmasi = confirm("Apakah anda ingin menghapus data tersebut?");
        if (konfirmasi == true){
           return true;
        }
        else{
           return false;
        }
    }
</script>