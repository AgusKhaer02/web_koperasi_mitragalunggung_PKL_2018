<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Verifikasi kode</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <style type="text/css">
    .form{
        background-color:whitesmoke;
        padding-left:10px;
        padding-right:10px;
        padding-top:30px;
        padding-bottom:30px;
        width:500px;
        height:250px;
        margin-top:150px;
    }
    body{
        background-color:#f97400;
        font-family:'Segoe UI';
        font-size:20px;
    }
    .footer{
        padding:30px;
        background-color:#f94600;
        margin-top:140px;
    }
    </style>
</head>
<body>
<center>
<div class="form">
    <h1>Kode Verifikasi</h1>
    <i>Kode verifikasi anda telah dikirimkan melalui email anda</i>
    <form action="" method="GET" Id="next">
    <input type="text" name="verify">
    <input type="submit" value="Lanjutkan" class="button">
    </form>
<?php
if (isset($_GET['verify'])){
    include '../Includes/Koneksi.php';
    $verify = $_GET['verify'];
    $query = "SELECT * FROM anggota WHERE verifycode='$verify'";
    $execute = mysqli_query($conn,$query);
    if ($numrows=mysqli_num_rows($execute) > 0){
        echo"<script>
        document.getElementById('next').style.visibility = 'hidden';
        </script>";
        echo "
        <font style='color:green;'><i>Verifikasi sukses!</i></font>
        <form action='' method='POST'>
        Password Baru : <input type='pass' name='new_pass'>
        <input type='submit' value='ubah' class='button'>
        </form>
        ";
        if (isset($_POST['new_pass'])){
        $newpass = $_POST['new_pass'];
        $querychange = "UPDATE anggota SET password='$newpass' where verifycode='$verify'";
        $change = mysqli_query($conn,$querychange);
        header("location:../index.php");
        }
    }else{
        echo "</br>Verifikasi kode salah";
    }
}
?>
</div>
</center>
</body>
</html>