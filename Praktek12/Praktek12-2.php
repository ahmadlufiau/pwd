<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktek12-2-CekLogin Ahmad Lufi Alfianul Ula</title>
</head>
<body>
    <?php 
        if(isset($_POST['username']))
        {
            echo 'Hallo, ' . $_POST['username']. '....<br>';
            echo ' Selamat Datang di Website Kami';
        }
    ?>
</body>
</html>
