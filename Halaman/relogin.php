<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Ulang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<script>
alert("Anda Harus Melakukan Login Kembali");
</script>
<form action="../Includes/aksilogin.php" method="POST" id="form">
        Email<br/>
        <input type="text" name="email" required><br/>
        Password<br/>
        <input type="password" name="password" required><br/>
        <input type="submit" value="Masuk" class="button"></input><br/><br/>
</form>
</body>
</html>