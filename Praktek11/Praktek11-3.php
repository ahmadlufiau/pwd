<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Set Cookie</title>
</head>
<body>
    <?php 
    // men-set nilai cookie
    setcookie('nama_cookie', 'nilai_cookie');

    // mendapatkan nilai cookie
    echo $_COOKIE['nama_cookie'];
    ?>
    <p>Tekan refresh (f5)</p>
</body>
</html>
