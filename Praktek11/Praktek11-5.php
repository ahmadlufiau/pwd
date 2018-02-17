<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hapus Cookie</title>
</head>
<body>
    <?php 
    setcookie('nama_cookie','nilai_cookie');
    if(isset($_COOKIE['nama_cookie'])) {
        echo 'cookie di-set<br/>';

        // menghapus cookie dengn masa berlaku 3 jam yang lalu
        setcookie('nama_cookie', '', time() - 3 * 3600);
        echo 'Cookie Dihapus';
    } else {
        echo 'unset';
    }
    ?>  
    <p>Tekan Refresh (f5)</p>
</body>
</html>
