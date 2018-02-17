<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek</title>
</head>
<body>
   <?php 
    if(isset($_GET['nama']) && $_GET['alamat'] && $_GET['pekerjaan'])
    {
        echo 'Nama : ' . $_GET['nama'];
        echo "<br>";
        echo "Alamat : " . $_GET['alamat'];
        echo "<br>";
        echo "Pekerjaan : " . $_GET['pekerjaan'];
        echo "<br>";
    }
   ?>
</body>
</html>
