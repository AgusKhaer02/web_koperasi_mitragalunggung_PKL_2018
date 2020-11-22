<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
$no = $_GET['no'];
$no_simpanan = $_GET['no_simpanan'];
$nama = $_GET['nama'];
$hari = $_GET['hari'];
$bulan = $_GET['bulan'];
$tahun = $_GET['tahun'];
$besar = $_GET['besar'];
?>
<form action="../Includes/aksidatasimpanan.php" method="post">
        <div id="form">
        <table>
        <tr>
            <td>Nama</td><td><input type="text" class="textbox" value="<?php echo $no ?>" name="nama" maxlength="225"/></td>
        </tr>
        <tr>
            <td>No Simpanan</td><td><input type="text" class="textbox" value="<?php echo $no_simpanan ?>" name="no_simpanan" maxlength="11"/></td>
        </tr>
        <tr>
            <td>Tanggal Simpanan</td><td>
            <select name="hari" value="<?php echo $hari ?>">
            <?php
                for($hari=1;$hari<=31;$hari++){
                    echo "
                    <option value='$hari'>$hari</option>
                    ";
                }
            ?>
            </select>
            <select name="bulan" value="<?php echo $bulan?>">
            <?php
                for($bulan=1;$bulan<=12;$bulan++){
                    echo "
                    <option value='$bulan'>$bulan</option>
                    ";
                }
            ?>
            </select>
            <select name="tahun" value="<?php echo $tahun?>">
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
            <td>Besar Simpanan</td><td><input type="text" class="textbox"value="<?php echo $besar?>" name="besar"/></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" class="button"></input></td>
        </tr>
        </table>
</div>
    </form>
</body>
</html>