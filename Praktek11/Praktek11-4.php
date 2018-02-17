<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Dukungan Cookie</title>
</head>
<body>
    <?php 
        if(Isset($_GET['q']) && $_GET['q'] ==1 ) {
            if(Isset($_COOKIE['test'])) {
                echo 'support';
            } else {
                echo 'Tidak Support';
            }
        } else {
            setcookie('test','value');
            $self = $_SERVER['PHP_SELF'];

            //Redireksi ke current script
            header('Location: ' . $self . '?q=1');
            exit;
        }
    ?>
    <p>Tekan Refresh(F5)</p>
</body>
</html>
