<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Masukan Email Anda</title>
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
        font-size:30px;
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
Masukan email anda
<form action="../Includes/aksilupapass.php" method="post">
<input type="text" name="email"><br/>
<input type="submit" value="Lanjutkan" class="button"/>
</form>
</div>
</center>
</body>
</html>