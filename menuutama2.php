<?php
    include 'Includes/loginok.php';
    if ($_SESSION['Status'] == "User")
    {
        echo"
        <script>
        alert('Anda bukan Member silahkan logout dan login sebagai member');
        document.location.href = 'menuutama.php';
        </script>";
    }
?>
<html>
    <head>
        <title>Koperasi Sukapura Mitra Galunggung</title>
        <link href='Gambar/logokoperasi2.png' rel='shortcut icon'>
    </head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="style2.css"/>
    <link rel="stylesheet" type="text/css/php" href="Includes/aksilogin.php"/>
    <link rel="stylesheet" type="text/css" href="style4.css"/>
    <style type="text/css">
    .login{
        border:1px solid orange;
        width:250px;
        height:auto;
        padding-bottom:22px;
        background-color:#ffcc33;
    }
    .sidenav a{
    padding:8px 8px 8px 8px;
    text-decoration:none;
    color:rgb(0, 0, 0);
    font-size:20px;
    display:block;
    transition:0.3s;
}
    .profilearea{
        height:auto;
        padding-bottom:5px;
        width:100%;
        background-color:rgb(255, 136, 0);
    }
    .sidenav{
    height: 100%;   /*full height*/
    width:0;    /*0 width will be changed by javascript*/
    position:fixed; /*Stay in place*/
    z-index:1;
    top:0;
    left:0;
    background-color: rgb(255, 172, 47);
    overflow-x:hidden;
    transition:0.5s;
}
#dropdown-item {
    display:none;
    background-color:rgba(192, 109, 0, 0.678);
}
    #animate-fade
    {
        animation:fade 500ms;
    }
    #animate.bottom-to-top{
        animation:bottom-to-top 500ms;
    }
    @keyframes fade {
        0% {opacity:0;}
        100% {opacity:100%;}
    }
    @keyframes dropdown-item-fade{
    0%{opacity:0;}
    100%{opacity:1;}
    }
    .rightlayout{
        background-color: #FF9900;
        width: 300px;
        height: auto;
        right:0;
        float: right;
        position:fixed;
    }
    .header{
    width:1146px;
    height:300px;
    }
    .textbox{
        background-color:white;
        padding-top:2px;
        padding-left:5px;
        padding-right:5px;
        padding-bottom:1px;
        border:1px solid rgb(0, 195, 255);
    }
    #searchbar{
        border:none;
    }
    .background {
    background-color:  rgb(255, 123, 0);
    font-family: 'Segoe UI';
}
.bar_navigasi{
    padding: 20px;
    background-color: orange;
}
.footer {
    width:100%;
    background-color:#ff9900;
    height:auto;
    padding-top:2px;
    bottom:0;
    position:fixed;
    padding-bottom:2px;
}
    </style>
<body class="background">
<div style="width:100%;height:2%;background-color:rgb(255, 72, 0);">
</div>
    <center>
    <div class="bar_navigasi"><font style="float:left;font-size:20px;text-align:center;">Koperasi Sukapura Mitra Galunggung</font><?php include('Includes/Navigasi2.php'); ?><?php echo "<div style='right:10px;top:25px;font-family:tahoma;position:absolute;background-color:#ff8300;'><table><tr><td><img width='50' height='50' src='Includes/Gambar_user/".$_SESSION['Foto']."'></td><td>".$_SESSION['nama_user']."<br/><font style='color:white;font-size:20px;'>".$_SESSION['Status']."</font></td></tr></table></div>";?></div>
    <table style="width:100%;background-color: white;">
        <tr>
            <td id="animate-fade" style="padding-bottom:40px;">
                <?php
                if (isset($_GET['leftindex'])){
                    $leftindex = $_GET['leftindex'];
                switch ($leftindex)
                {
                    case 'Home':
                    include 'Halaman/Home.php';
                    break;
                    //----------------------------------------
                    case 'SejarahKoperasi':
                    include 'Halaman/SejarahKoperasi.php';
                    break;
                    //----------------------------------------
                    case 'LokasiKoperasi':
                    include 'Halaman/Lokasi';
                    break;
                    case 'SuratKeputusan':
                    include 'Halaman/SuratKeputusanWalikota.php';
                    break;
                    case 'DaftarHadir':
                    include 'Halaman/DaftarHadir.php';
                    break;
                    case 'DataSimpanan':
                    include 'Halaman/DataSimpanan.php';
                    break;
                    case 'Denah':
                    include 'Halaman/Denah.php';
                    break;
                    case 'KartuPinjamanKoperasi':
                    include 'Halaman/KartuPinjaman.php';
                    break;
                    case 'Pinjam':
                    include 'Halaman/TampilPinjam.php';
                    break;
                    case 'Daftaranggota':
                    include 'Halaman/daftaranggota.php';
                    break;
                    case 'HasilSimpan':
                    include 'Halaman/hasilsimpan.php';
                    break;
                    case 'HasilPinjam':
                    include 'Halaman/hasilpinjam.php';
                    break;
                    case 'Simpan':
                    include 'Halaman/TampilSimpan.php';
                    break;
                    case 'LaporanSimpan';
                    include 'Halaman/laporansimpan.php';
                    break;
                    case 'Backup':
                    include 'Halaman/backup.php';
                    break;
                    //----------------------------------------
                    default :
                    echo "Halaman yang anda cari tidak tersedia";
                    break;
                }}
                else {
                    include 'Halaman/Home.php';
                }
                ?>
            </td>
        </tr>
    </table>
</center>
<?php
if(isset($_SESSION['nama_user'])&&($_SESSION['Foto'])){
$_SESSION['nama_user'];
$_SESSION['Foto'];
}
echo "
<div id='mySidenav' class='sidenav' onmouseover='openNav()' onmouseout='closeNav()'>
<div class='profilearea'>
                <center>
            <img class='profilepic' src='Includes/Gambar_user/".$_SESSION['Foto']."'>
            <a href='Halaman/Profile.php' class='nameprofile'>".$_SESSION['nama_user']."</a>
            <a style='font-size:20px;color:blue;'href='Includes/logout.php'>Keluar</a>
</div>
            </center>
            <a href='menuutama2.php?leftindex=Home'>Home</a>
            <a href='menuutama2.php?leftindex=Simpan'>Simpan</a>
            <a href='menuutama2.php?leftindex=Pinjam'>Pinjam</a>
            <a href='menuutama2.php?leftindex=Daftaranggota'>Daftar Anggota</a>
            <a href='menuutama2.php?leftindex=SejarahKoperasi'>Sejarah Koperasi</a>
            <a href='#' onmouseover='Visible()' onmouseout='Hidden()'style='cursor:pointer'>Dan Lain Lain</a>
            <div id='dropdown-item' onmouseover='Visible()'onmouseout='Hidden()'>
                <a href='menuutama2.php?leftindex=SuratKeputusan'>Pengesahan Akta Pendirian</a>
                <a href='http://www.stmik-tasikmalaya.ac.id/'>Go to official page</a>
            </div>
</div>
<div id='sidebutton'>
    <span id='btnOpenNav' onmouseover='openNav()' style='cursor:pointer;'>
    <img src='Gambar/icons/menu.png' width'30'value='menu' height='30'/>
</span>
</div>";
?>
<div class="footer">
<a href="Halaman/About.php"><b>About Us</b></a>
</div>
<script>
function openNav(){
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("sidebutton").style.transform = "translateX(250px)";
    document.getElementById("sidebutton").style.transition = "550ms";
}
function closeNav(){
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("sidebutton").style.transform = "translateX(0px)";
}
function Visible(){
    document.getElementById("dropdown-item").style.display = "block";
}
function Logout(){
    session_destroy();
}
function Hidden(){
    document.getElementById("dropdown-item").style.display = "none";
};
</script>
</body>
</html>