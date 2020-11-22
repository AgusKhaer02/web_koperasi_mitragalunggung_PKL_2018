<style>
body{
    font-family:'Arial';
}
.form{
    padding-top:10px;
    padding-bottom:10px;
    padding-left:15px;
    padding-right:15px;
    background-color:whitesmoke;
    top:35%;
    left:35%;
    right:35%;
    position:absolute;
    border-top:3px solid #55ed55;
}
</style>
<?php
if (isset($_GET['activate'])){
    include 'Includes/Koneksi.php';
        $ubah =mysqli_query($conn,"UPDATE anggota SET activated='Y' WHERE activation_code='$_GET[activate]'") or die(mysqli_error($conn));
    if ($ubah)
    {
        echo "
        <center>
        <div class='form'>
        <font color='green'><h3>Aktivasi Selesai</h3></font>
        Klik <a href='index.php'>masuk</a> untuk login
        </div>
        </center>
        ";
    }
}
?>