<html>
<head>
    <title>
        Edit Daftar
    </title>
</head>
<link rel="stylesheet" type="text/css" href="../formeditdata.css"/>
<link rel="stylesheet" type="text/css" href="../style.css"/>
<body>
<form action="../Includes/tambahdaftarhadir.php" method="post">
<div id="form">
<table>
<tr>
    <td>Nama </td><td><input type="text" name="nama"></input></td>
</tr>
<tr>
    <td>Unit Kerja </td><td><input type="text" name="unit"></input></td>
</tr>
<tr>
    <td><input type="submit" value="simpan" class="button"></input></td>
</tr>
</table>
</div>
</form><br/><br/><br/><br/><br/><br/><br/>
<table border="1" style="background-color:rgb(187, 187, 187);font-family:arial; padding:5px;border-radius:10px;">
<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Unit Kerja</th>
</tr>
<?php
        include("../Includes/Koneksi.php");
        $query=mysqli_query($conn,"SELECT * FROM daftar_hadir");
        while ($show=mysqli_fetch_array($query)){
                echo"
                <tr>
                        <td>$show[No]</td>
                        <td>$show[Nama]</td>
                        <td>$show[Unit_kerja]</td>
                        <td><a href='../Includes/hapusdaftarhadir.php?no=$show[No]'>Hapus</a></td>
                <tr>
                ";
        }
?>
</table>
</body>
</html>