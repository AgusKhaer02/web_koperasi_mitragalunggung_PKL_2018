<?php
session_start();
?>
<html>
    <head>
        <title>Ubah Profil</title>
    </head>
    <link rel="stylesheet" type="text/css" href="../style3.css">
    <style>
    body{
        background:url(../Gambar/bgRegister.jpg);
        background-size:100% 100%;
        background-repeat:no-repeat;
    }
    h2{
    padding:50px;
    background-color:rgb(255, 102, 0);
    letter-spacing: 5px;
    font-size: 30px;
    color:white;
    border-top-right-radius:5px;
    border-top-left-radius:5px;
    text-align:center;
    font-family: 'Segoe UI';
    }
    .button{
    padding-top : 10px;
    padding-bottom: 10px ;
    padding-left: 10px;
    float:right;
    padding-right: 10px;
    color: black;
    background-color: rgb(0, 104, 223);
    }
    @keyframes fade {
        0% {
            opacity:0; 
            transform:translateX(-20px);
        }
        100% {
            opacity:100%;
            transform:translateX(0px);
        }
    }
.button:hover{
    transition: 0.2s;
    padding-top : 10px;
    padding-bottom: 10px ;
    padding-left: 10px;
    padding-right: 10px;
    color: #ffffff;
    background-color: rgba(31, 117, 216, 0.753);
    text-decoration: none;
}
#img-profile {
    background-color:whitesmoke;
    padding:3px;
    float:left;
    width:60px;
    height:60px;
}
.invisible{
    visibility: Hidden;
}
    </style>
<body>
<?php
$foto = $_SESSION['Foto'];
$nama = $_SESSION['nama_user'];
$email = $_SESSION['email_user'];
$alamat = $_SESSION['alamat_user'];
$jurusan = $_SESSION['Jurusan'];
$no_telp = $_SESSION['Notelp_user'];
echo "
<h2 style='animation:fade 1500ms'>Ubah profil</h2>
<div class='form' style='animation :fade 1500ms'>
<form action='../Includes/aksieditprofile.php' method='post' enctype='multipart/form-data'>
<img src='../Includes/Gambar_user/$foto' id='img-profile'><br/>Foto Profil<br/><br/><br/>
<input type='file' name='foto' class='textbox'></input><br/><br/>
    Nama<br/>
    <input type='text' name='nama' class='textbox' value='$nama' required></input><br/><br/>
    Email<br/>
    <input type='text' name='email' class='textbox' value='$email'required></input><br/><br/>
    Password Baru<br/>
    <input type='password' name='new_pass' class='textbox' required></input><br/><br/>
    Password Lama<br/>
    <input type='password' name='old_pass' class='textbox' required></input><br/><br/>
    Alamat<br/>
    <input type='text' name='alamat' value='$alamat' class='textbox' required></input><br/><br/>
    Tempat, Tanggal lahir<br/>
    <input type='text' name='ttlkt' style='width:90px' placeholder='Kota..'required></input>
    <select name='ttlhr'>";
            for($i=1;$i<=31;$i++){
                echo"
                <option value='$i'>$i</option>
                ";
            }
echo"
    </select>
    <select name='ttlbln'>
        <option value=''>Bulan...</option>
        <option value='Januari'>Januari</option>
        <option value='Februari'>Februari</option>
        <option value='Maret'>Maret</option>
        <option value='April'>April</option>
        <option value='Mei'>Mei</option>
        <option value='Juni'>Juni</option>
        <option value='Juli'>Juli</option>
        <option value='Agustus'>Agustus</option>
        <option value='September'>September</option>
        <option value='Oktober'>Oktober</option>
        <option value='November'>November</option>
        <option value='Desember'>Desember</option>
    </select>
    <select name='ttlthn'>";
            for($thn=1980;$thn<=2018;$thn++){
                echo"
                <option value='$thn'>$thn</option>
                ";
            }
    echo"
    </select>
    <br/><br/>
    Jurusan<br/>
    <input type='text' value='$jurusan' name='jurusan'class='textbox'></input><br/><br/>
    Jenis Kelamin<br/>
    <select name='jk'>
    <option value='L'>Laki-Laki</option>
    <option value='P'>Perempuan</option>
    </select>    
    <br/><br/>
    Nomor Telepon<br/>
    <input type='text' name='no_telp' value='$no_telp'class='textbox' maxlength='13' required></input><br/><br/>
    <input type='submit' value='Ubah' class='button'></input>";
?>
</form>
</div>
</body>
</html>