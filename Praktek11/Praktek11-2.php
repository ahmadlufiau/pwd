<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hapus Session</title>
</head>
<body>
    <?php 
    //inisialisasi data session
    session_start();

    //set session jika belum adad
    if(isset($_SESSION['test'])) {
        //Hapus session test
        unset($_SESSION['test']);
        echo 'session dihapus';
    } else {
        echo 'unset';

        // mencetak semua elemen session
        print_r($_SESSION);
    }
    ?>
    <p>Tekan refresh (f5)</p>
</body>
</html>
