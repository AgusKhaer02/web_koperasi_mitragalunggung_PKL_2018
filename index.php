<?php
    session_start();
    if (!isset($SESSION['Email'])){
        if (isset($_SESSION['Status'])){
            if($_SESSION['Status'] == "Member"){
                header("location:menuutama2.php");
            }elseif ($_SESSION['Status'] == "User"){
                header("location:menuutama.php");
            }
        }
    }
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link href='Gambar/logokoperasi2.png' rel='shortcut icon'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
    #form{
        padding-top :50px;
        padding-bottom :20px;
        padding-left :40px;
        padding-right :40px;
        background-color:whitesmoke;
        position:fixed;
        right:100px;
        top:100px;
    }
    .header{
        width:100%;
        padding-top:30px;
        padding-bottom:30px;
        background-color:orange;
        letter-spacing:2px;
        font-size:20px;
    }
    body{
        font-family:'segoe UI';
    }
    @keyframes fade {
        0% {opacity:0;};
        100%{opacity:100;};
    }
    p{
        position:absolute;
        font-size:40px;
        font-weight:bold;
        color:white;
        margin-left:40px;
    }
</style>
<body bgcolor="#ffd000">
<center>
<div class="header">
    Koperasi Sukapura Mitra Galunggung
</div>
</center>
    <form action="Includes/aksilogin.php" method="POST" id="form">
        <div class="field">
        <input type="text" id="email" class="input"name="email" required>
        <label for="email" class="label">Email</label>
        </div>
        <div class="field" style="margin-top:30px;">
        <input type="password" id="password" class="input" name="password" required>
        <label for="password" class="label">Password</label>
        </div><br/>
        <input type="submit" value="Masuk" id="masuk"></input> <a href="Halaman/Register.php" id="daftar">Daftar</a><br/><br/>
        <a href="Halaman/lupapass.php">Saya Lupa Password</a><br/>
    </form>
</body>
<script type="text/javascript">
var imgs1 = new Array ("Gambar/bgRegister.jpg","Gambar/gedungsacana.jpg","Gambar/stm.png","Gambar/stm2.png");
var alt1  = new Array ("Gambar 1","Gambar 2");
var currentAd1 = 1;
var imgCt1 = 4;
function cycle1(){
    if (currentAd1 == imgCt1){
        currentAd1 = 0;
    }
    var banner1 = document.getElementById('adBanner1');
var link1 = document.getElementById('adLink1');
banner1.src=imgs1[currentAd1];
banner1.alt=alt1[currentAd1];
currentAd1++;
}
window.setInterval("cycle1()",5000);
</script>
<a href="#"link iklan-1"" id="adLink1" >
<img src="Gambar/bgRegister.jpg"id="adBanner1" border="0" width="100%" height="100%" /></a>
</html>