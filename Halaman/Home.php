<style type="text/css">
    #bgHeader{
    background:url(../Gambar/bertiga.jpg);
    padding:90px;
    background-repeat:no-repeat;
    background-size:100% 100%;
    position:relative;
    filter:grayscale(40%);
    filter:contrast(80%);
    border-radius:5px;
    animation:fade-color 1500ms;
    margin-bottom:70px;
    }
    .running-text{
        animation:color-runningtext 2s linear 0s infinite alternate running;
    }
    @keyframes color-runningtext {
        0%{
            color:rgb(255, 255, 51);
        }
        100%{
            color:rgb(255, 117, 26);
        }
    }
    #welcome{
        width:100%;
        background-color:rgb(230, 46, 0);
        font-size:25px;
        letter-spacing:3px;
        font-style:bold;
        color:white;
    }
    #pengelolakoperasi{
        background:url('Gambar/bauk2.jpg');
        background-size:100% 100%;
        width:150px;
        height:30px;
        padding:100px;
    }
    .column{
        width:900px;
        column-count: 2;
    }
    .txtb{
        float:left;
        overflow:hidden;
        position:relative;
        height:27px;
        font-size:20px;
    }
    .txtsp{
        display:inline-block;
        color:red;
        position:relative;
        white-space:nowrap;
        top:0;
        left:0;
        -webkit-animation:move 5s;
        -webkit-animation-iteration-count:infinite;
        -webkit-animation-delay:3s;
    }
    @keyframes move{
        0%{top:0px;}
        50%{top:-27px;}
        75%{top:-56px;}
        100%{top:0px;}
    }
    @keyframes fade-to-bottom{
        0%{
            opacity :100%;
            transform:translateY(-130px);
        }
        100%{
            opacity :0%;
            transform:translateY(0px);
        }
    }
    @keyframes fade-to-right{
        0%{
            opacity :100%;
            transform:translateX(-40px);
        }
        100%{
            opacity:0%;
            transform:translateX(0px);
        }
    }
    #table td{
        padding:20px;
    }
    #bgHeader{
    background:url(Gambar/pic4.jpg);
    padding:90px;
    height:200px;
    width:80%;
    background-repeat:no-repeat;
    background-size:100% 100%;
    position:center;
    filter:contrast(80%);
    animation:fade-color 1500ms;
    margin-bottom:70px;
    }
    #text30px{
        font-size:17px;
        margin-left:15px;
    }
    .fotogaleri td{
        padding-right:40px;
        padding-bottom:10px;
    }
    #map{
        height:400px;
        width:70%;
        background-color:#d1d1d1;
        box-shadow:0px 2px 4px 0px;
    }
</style>
<link href="js-image-slider.css" rel="stylesheet" type="text/css">
<script src="js-image-slider.js" type="text/javascript"></script>
<link href="generic.css" rel="stylesheet" type="text/css">
<div id="welcome">
<marquee direction="left" class="running-text"scrollamount="12">Selamat Datang di Koperasi Sukapura Mitra Galunggung</marquee>
</div>
<center>
<table>
<tr>
    <td>
        <div id="sliderFrame">
        <div id="slider">
            <a href="#" target="_blank">
               <img src="Gambar/Image-Slide1.jpg" alt="Dokumentasi Rapat Anggota Tahunan(RAT) 2015">
            </a>
                <img src="Gambar/image-slide2.png" alt="Tempat pengelola koperasi,tepatnya di samping kantor STMIK">
                <img src="Gambar/image-slide3.jpg" alt="Dokumentasi Rapat Anggota Tahunan(RAT) 2016">
        </div>
            <div id="htmlcaption" style="display: none;">
            </div>
        </div>
    </td>
    <td><img src="Gambar/logokoperasi.png" style="animation:fade-to-right 900ms;width:200px;height:200px;margin-top:15px;"></td>
    <td><font style="font-size:40px;">Selamat Datang di Koperasi Sukapura Mitra Galunggung<br></font>
    <div class="txtb">
        <div class="txtsp">
        Kami melayani setulus hati<br>
        Anda ingin transaksi simpan pinjam? Anda bisa transaksi disini!<br>
        Koperasi no 1 Di Tasikmalaya
        </div>
    </div>
    </td>
</tr>
</table>
<div class="container">
<div class="title">
    <h1>Apa itu Koperasi?</h1>
    </div>
<div class="multicolumns count-2">
<b>Koperasi</b> adalah organisasi ekonomi yang dimiliki dan dioperasikan oleh orang-seorang demi kepentingan bersama.
Koperasi melandaskan kegiatan berdasarkan prinsip gerakan ekonomi rakyat yang berdasarkan asas kekeluargaan.
</div>
</div>
<div style="width:100%;background-color:whitesmoke;">
<h3>Profil Koperasi</h3><br/>
<table>
<tr>
<td>
<img src="Gambar/stm.png" width="500" height="300" id="stm">
</td>
<td>                     
<img src="Gambar/stm2.png" width="500" height="300">
</td>
</tr>
</table>
<h3>Gedung Sasana Kancana Agung</h3>
<img src="Gambar/gedungsacana.jpg" width="810" height="430" style="margin-bottom:10px">
</center>
<div style="width:100%;background-color:whitesmoke;">
<center>
<div class="container">
<h3>Lokasi Koperasi Sukapura Mitra Galunggung</h3>
<div id="map"></div>
</div>
</div>
</center>
<p align="center">
<b>Tentang Koperasi Sukapura Mitra Galunggung</b><br/>
Berdirinya koperasi pada tanggal 21 Juli 2011<br/>
Terdaftar pada notaris & PPAT Heri Hendriana, SH. MH. Nomor 428<br/>
Koperasi ini berdudukan di jl RE Martadinata 271 D,Kelurahan panyingkiran, kecamatan indihiang, Kota Tasikmalaya
</p>
<div class="container">
<div style="font-size:30px;">Fungsi Koperasi Simpan Pinjam</div><br/>
<div id="text30px">
1) Sebagai pendorong kegiatan menabung/menyimpanuang<br/>
2) Sebagai lembaga yang melayani anggota yang membutuhkan pinjaman uang<br/>
3) Sebagai pembimbing anggota<br/>
4) Sebagai lembaga keuangan yang menyelamatkan anggotanya
</div>
</div>
<h3 style="font-size:30px;font-family:'segoe UI';"align="center">VISI DAN MISI</h3>
<div class="container">
<a style="font-size:30px;margin-left:15px;color:black;">Visi</a>
<div class="multicolumns count-1">
<div id="text30px">
Menjadikan KOPMA sebagai organisasi yang profesional, mandiri dan menjadi laboratorium pengembangan usaha serta pengkaderan generasi yang menerapkan nilai-nilai koperasi berazaskan kekeluargaan untuk kesejateraan anggota.</br>
</div>
</div>
</div>
<div class="container">
<a style="font-size:30px;margin-left:15px;color:black;">Misi</a>
<div class="multicolumns count-2">
<div id="text30px">
a)    Membangun iklim organisasi untuk seluruh elemen kopma yang professional dan harmonis berazaskan kekeluargaan</br>
b)    Menguatkan hubungan internal dan eksternal sebagai langkah pencitraan positif dengan didukung komunikasi dan informasi yang berkesinambungan dan berkelanjutan</br>
c)    Memantapkan pola kaderisasi  yang terstruktur dan terarah guna melahirkan kader-kader kopma yang handal, loyal, kreatif dan kompetitif.</br>
d)    Mengembangkan jiwa kewirausahaan seluruh elemen kopma yang berorientasi pada kebermanfaatan anggota.</br>
e)    Meningkatkan jiwa prestatif di bidang minat bakat dan keilmiahan seluruh anggota.</br></br>
</div>
</div>
</div>
<center>
<div id="bgheader">
<h3 style="font-size:30px;color:white;">ANGGOTA KOPERASI</h3>
<font size="15"color="white" style="font-weight:bold;">Jumlah Anggota Koperasi Di STMIK TASIKMALAYA sebanyak 46 Orang</font>
</div>
<div class="container">
<div style="font-family:'segoe UI';font-size:30px;margin-top:5px;"><b>RAPAT ANGGOTA TAHUNAN (RAT)</b><br><br>
<div id="text30px">
<table class="fotogaleri">
<tr>
<td><h4>1. Rapat Anggota Tahunan (RAT) Pertama Tahun 2012<br></h4>
<img src="Gambar/rat6.jpg" style="width:500; height:250; margin-left:20px;" ></td>
<td><h4>2. Rapat Anggota Tahunan (RAT) Kedua Tahun 2013<br></h4>
<img src="Gambar/rat2.png" style="width:500; height:250; margin-left:20px;" ></td>
</tr>
<tr>
<td><h4>3. Rapat Anggota Tahunan (RAT) Ketiga Tahun 2014<br></h4>
<img src="Gambar/rat.png" style="width:500; height:250; margin-left:20px;" ></td>
<td><h4>4. Rapat Anggota Tahunan (RAT) Keempat Tahun 2015<br></h4>
<img src="Gambar/RAT2015.jpg" style="width:500; height:250; margin-left:20px;" ></td>
</tr>
<tr>
<td><h4>5. Rapat Anggota Tahunan (RAT) Kelima Tahun 2016<br></h4>
<img src="Gambar/rat11.jpg" style="width:500; height:250; margin-left:20px;" ></td>
<td><h4>6. Rapat Anggota Tahunan (RAT) Keenam Tahun 2017<br></h4>
<img src="Gambar/12.png" style="width:500; height:250; margin-left:20px;" ></td>
</tr>
</table>
</center>
</div>
</div>
<style type="text/css">
.jumbotron-rounded{
   background-color:#d3d3d3; 
   border-radius:10px;
   padding:50px;
}
.tbl td{
    padding-right:100px;
}
</style>
<center>
<div style="font-family:'segoe UI';font-size:30px;margin-top:10px;"><b>DENAH KOPERASI SUKAPURA MITRA GALUNGGUNG</b><br/>
<img src="Gambar/Denah_STMIK2.png" width="300px" height="500px"><br>
<i>Keterangan</i>
</center>
<div class="jumbotron-rounded">
<table class="tbl">
<tr>
<td>1. Pos 1 <br>2. Pos 2 <br>3. Tempat Parkir <br>4. Bauk/ Tempat Pengelola Koperasi <br>5. L.Hardware <br>6. Aula <br>
7. R. Aula <br>8. Rapat 2 <br></td>
<td>9. R. Ketua <br>10. R3.101 <br>11. R3.102  <br>12. R. Dosen <br>13. R3.103  <br>14. R3.105 <br>15. R3.104 <br>
16. R. Sidang <br>
</td>
<td>17. R. Rapat <br>18. R. Kemahasiswaan<br> 19. Mushola<br> 20.R.Marching Band    <br> 21. Lapang Tenis Meja<br> 22. Gedung Putih (Sasana Kancana Agung)/Indoor <br>23. Kantin<br> 24. Rusunawa<br></td>
</tr>
</table>
</div>
<center>
<h3>Struktur Organisasi Koperasi</h3>
<img src="Gambar/Struktur_Organisasi_Koperasi.png"><br/>
<h3>Struktur Organisasi Badan Pengawas Koperasi</h3>
<img src="Gambar/Struktur_Organisasi_BadanPengawasKoperasi.png">
</center>
<script>
      function initMap() {
        var uluru = {lat: -7.3065565, lng: 108.2068726};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUYRr1Q0ND4GNY97VW048qcrkA1Wp0RNE&callback=initMap">
</script>