<html>
    <head>
        <title>Daftar</title>
    </head>
    <link rel="stylesheet" type="text/css" href="../style3.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="http://resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    </style>
<body>
<h2 style="animation:fade 1500ms">Daftar</h2>
<div class="form" style="animation :fade 1500ms">
<?php
    if (isset($success)){
        if ($success == true){
            echo "
            <script>
            alert('Captcha anda benar,silahkan lanjut ke tahap selanjutnya');
            </script>
            ";
        }else{
            echo "
            <script>
            alert('Anda belum melengkapi captcha,silahkan isi terlebih dahulu');
            </script>
            ";
        }
    }
?>
<form action="../Includes/aksidaftar.php" method="post" enctype="multipart/form-data">
    Nama<br/>
    <input type="text" name="nama" class="textbox" required></input><br/><br/>
    Email<br/>
    <input type="text" name="email" class="textbox"required></input><br/><br/>
    Password<br/>
    <input type="password" name="pass" class="textbox"required></input><br/><br/>
    Alamat<br/>
    <input type="text" name="alamat" class="textbox"required></input><br/><br/>
    Tempat, Tanggal lahir<br/>
    <input type="text" name="tempat" style="width:90px" placeholder="Kota.."required></input>
    <input type="text" name="tanggal" id="tanggal" placeholder="Tanggal">
    <br/><br/>
    Jurusan<br/>
    <input type="text" name="jurusan"class="textbox"></input><br/><br/>
    Jenis Kelamin<br/>
    <select name="jk">
    <option value="L">Laki-Laki</option>
    <option value="P">Perempuan</option>
    </select>    
    <br/><br/>
    Nomor Telepon<br/>
    +62<input type="text" name="no_telp" class="textbox" style="width:150px;"maxlength="13" required></input><br/><br/>
    Foto<br/>
    <input type="file" name="foto" class="textbox"></input><br/><br/>
    Status <br/>
    <input type="radio" name="status" value="Member"required>Member</input><input type="radio" name="status" value="User"required>User</input><br/><br/>
    Captcha <br/>
    <img src="../Includes/captcha.php"></img><br/><br/>
    <input type="text" name="captcha" required><br/>
    <!--submit-->
    <input type="submit" value="Daftar"class="button"></input>
</form>
</div>
<script>
    $(document).ready(function(){
        $("#tanggal").datepicker({
            dateFormat:'yy-mm-dd'
        });
    });
</script>
</body>
</html>