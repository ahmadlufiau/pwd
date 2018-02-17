<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Set Session</title>
</head>
<body>
<?php 
   //inisialisasi data session
    session_start();

    // Set session jika belum ada
    if(!isset($_SESSION['test'])) {
        $_SESSION['test'] = 'value';
    } else {
        echo "Session di-set<br/>";
        //mencetak nilai session test
        echo 'Nilai: ' . $_SESSION['test'] . '<br/>';

        // mencetak semua elemen session
        print_r($_SESSION);
    }
?>
    <p>Tekan Refresh (F5);
</body>
</html>
