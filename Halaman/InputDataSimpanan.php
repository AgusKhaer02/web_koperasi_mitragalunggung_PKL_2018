<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<link rel="stylesheet" type="text/css" href="../formeditdata.css">
<link rel="stylesheet" type="text/css" href="../style.css">
<body>
    <form action="../Includes/aksidatasimpanan.php" method="post">
        <div id="form">
        <table>
        <tr>
            <td>Nama</td><td><input type="text" class="textbox"name="nama" maxlength="225"/></td>
        </tr>
        <tr>
            <td>No Simpanan</td><td><input type="text" class="textbox"name="no_simpanan" maxlength="11"/></td>
        </tr>
        <tr>
            <td>Tanggal Simpanan</td><td>
            <select name="hari">
            <?php
                for($hari=1;$hari<=31;$hari++){
                    echo "
                    <option value='$hari'>$hari</option>
                    ";
                }
            ?>
            </select>
            <select name="bulan">
            <?php
                for($bulan=1;$bulan<=12;$bulan++){
                    echo "
                    <option value='$bulan'>$bulan</option>
                    ";
                }
            ?>
            </select>
            <select name="tahun">
            <?php
                for($tahun=2018;$tahun<=2025;$tahun++){
                    echo "
                    <option value='$tahun'>$tahun</option>
                    ";
                }
            ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>Besar Simpanan</td><td><input type="text" class="textbox" name="besar"/></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" class="button"></input></td>
        </tr>
        </table>
</div>
    </form><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <table border="1"style="background-color:rgb(187, 187, 187);font-family:arial; padding:5px;">
<tr>
        <th rowspan="2">No</th>
        <th rowspan="2">No Simpanan</th>
        <th rowspan="2">Nama</th>
        <th rowspan="2">Tanggal Simpanan</th>
        <th rowspan="2">Besar Simpanan</th>
</tr>
<tr>
</tr>
<?php
        include("../Includes/Koneksi.php");
        $query=mysqli_query($conn,"SELECT * FROM data_simpanan");
        while ($show=mysqli_fetch_array($query)){
                            echo"
                            <tr>
                            <td>$show[NO]</td>
                            <td>$show[No_Simpanan]</td>
                            <td>$show[Nama]</td>
                            <td>$show[Tanggal_Simpanan]</td>
                            <td>$show[Besar_Simpanan]</td>
                            <td><a href='../Includes/hapusdatasimpanan.php?No_Simpanan=$show[No_Simpanan]'name='hapus'>Hapus</a></td>
                            <tr>
                            ";
        }
?>
</table>
</body>
</html>