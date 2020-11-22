<?php
    session_start();
    if (!isset($_SESSION['email_user'])){
        header("location:loginfailed.php");
    }
?>
<html>
    <head>
    <title>
        Profile
    </title>
    </head>
    <link rel="stylesheet" type="text/css" href="../profile.css"/>
    <style type="text/css">
    .background{
    background-color:rgb(247, 181, 0);
    width:100%;
    height:200px;
    padding-top:50px;
    margin-bottom:40px;
}
.nameprofile{
    font-size:30px;
    transition:0.2s;
    color:black;
}
.barinfo-title{
    width:auto;
    height:auto;
    padding-top:4px;
    padding-left:9px;
    padding-bottom:1px;
    background-color: rgb(255, 72, 0);
    top:0;
}
.barinfo{
    width:500px;
    height:auto;
    font-family:"Arial";
    background-color: rgb(255, 210, 64);
    box-shadow: 0px 1px 5px 0px;
}
#ubahprofil{
    text-decoration: none;
    color :rgb(0, 102, 255);
    transition:0.3s;
}
#ubahprofil:hover{
    color :rgb(0, 204, 255);
}
.profilepic {
    width:100px;
    height:100px;
    bottom:50px;
    border-radius:100px;
    animation:picture 500ms;
}
@keyframes fade-in{
    0%{
        opacity:0;
    }
    100%{
        opacity:100%;
    }
}
@keyframes fade-ltr{
    0% {
        opacity:0;
        transform :translateX(-20px);
    }
    100% {
        opacity:100%;
        transform:translateX(0px);
    }
}
@keyframes picture{
    0% {
        opacity:0;
        transform :translateY(20px);
    }
    100% {
        opacity:100%;
        transform:translateY(0px);
    }
}
    </style>
<body style="font-family:Arial;background-color:orange;">
<?php
$nama = $_SESSION['nama_user'];
$alamat = $_SESSION['alamat_user'];
$email = $_SESSION['email_user'];
if ($jk = $_SESSION['JK_user'] == "L"){
    $jk = "Laki-Laki";
}
elseif ($jk = $_SESSION['JK_user'] == "P"){
    $jk = "Perempuan";
}
else {
    $jk = "Jenis Kelamin tidak diketahui";
}
$notelp = $_SESSION['Notelp_user'];
$ttl = $_SESSION['TTL'];
$jurusan = $_SESSION['Jurusan'];
$foto = $_SESSION['Foto'];
$no = $_SESSION['No_anggota'];
echo "
    <div class='background'>
    <center>
        <img class='profilepic' src='../Includes/Gambar_user/".$foto."'><br/><br/>
        <div class='nameprofile'style='animation:fade-in 1000ms'>".$nama."</div><br/>
        No Anggota : ".$no."
        <a href='changeprofile.php' id='ubahprofil' style='animation:fade-in 1010ms'>Ubah Profil</a>
    </center>
    </div>
    <center>
    <table style='width:100%'>
    <tr>
    <td>
    <div class='barinfo' style='animation:fade-ltr 400ms'>
    <div class='barinfo-title'>
        <h2>Alamat</h2>
    </div>
                ".$alamat."
    </div>
            </td>
            <td>
                <div class='barinfo' style='animation:fade-ltr 600ms'>
                <div class='barinfo-title'>
                    <h2>Email</h2>
                </div>
                    ".$email."
                </div>
            </td>
        </tr>
        <tr>
            <td style='height:50px'></td>
        </tr>
        <tr>
            <td>
            <div class='barinfo' style='animation:fade-ltr 700ms'>
                <div class='barinfo-title'>
                    <h2>Jenis Kelamin</h2>
                </div>
                    ".$jk."
                </div>
            </td>
            <td>
            <div class='barinfo' style='animation:fade-ltr 800ms'>
                <div class='barinfo-title'>
                    <h2>No Telepon</h2>
                </div>
                    +".$notelp."
                </div>
            </td>
        </tr>
        <tr>
            <td style='height:50px'></td>
        </tr>
        <tr>
            <td>
            <div class='barinfo' style='animation:fade-ltr 900ms'>
                <div class='barinfo-title'>
                    <h2>Tempat, tanggal lahir</h2>
                </div>
                   ".$ttl."
                </div>
            </td>
            <td>
            <div class='barinfo' style='animation:fade-ltr 900ms'>
                <div class='barinfo-title'>
                    <h2>Jurusan</h2>
                </div>
                ".$jurusan."
                </div>
            </td>
        </tr>
    </table>
</center>";
?>
</body>
</html>