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
    <form action="../Includes/aksikartupinjaman.php" method="post">
        <div id="form">
        <table>
        <tr>
            <td>Tanggal pembayaran</td><td>
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
            <td>Besar pinjaman</td><td><input type="text" class="textbox" name="besar_pinjam" maxlength="20"/></td>
        </tr>
        <tr>
            <td>Angsuran bulanan</td><td><input type="text" class="textbox" name="angsuran_bulanan" maxlength="20"/></td>
        </tr>
        <tr>
            <td>Saldo pinjaman</td><td><input type="text" class="textbox"name="saldo_bulanan" maxlength="20"/></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" class="button"></input></td>
        </tr>
        </table>
</div>
    </form><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <table border="1" style="background-color:rgb(187, 187, 187);font-family:arial; padding:5px;">
<tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Tanggal Pembayaran</th>
        <th rowspan="2">Besar Pinjaman</th>
        <th rowspan="2">Angsuran Bulanan</th>
        <th rowspan="2">Saldo Pinjaman</th>
</tr>
<tr>
</tr>
<?php
        include("../Includes/Koneksi.php");
        $query=mysqli_query($conn,"SELECT * FROM kartu_pinjaman_koperasi");
        while ($show=mysqli_fetch_array($query)){
                echo"
                <tr>
                        <td>$show[no]</td>
                        <td>$show[Tanggal_pembayaran]</td>
                        <td>$show[besar_pinjaman]</td>
                        <td>$show[Angsuran_Bulanan]</td>
                        <td>$show[Saldo_Peminjaman]</td>
                        <td><a href='../Includes/hapuskartupinjaman.php?no=$show[no]'>Hapus</a></td>
                <tr>
                ";
        }
?>
</table>
</body>
</html>