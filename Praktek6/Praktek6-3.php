<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fungsi String PHP</title>
</head>
<body>
    <?php
        /*  Program : Lat01-c.php
            By : Ahmad Lufi Alfianul Ula
            NIM : 3.34.16.1.02
            Date : 17 - 12 - 2017
            Description : PHP String
        */
    echo "The Concatenation Operator:<br>";
    $txt1="Hello World!";
    $txt2="What a nice day!";
    echo $txt1 . " " . $txt2 . "<br>";

    echo "The strlen() function : <br>";
    echo "Panjang string Hello World!=". strlen("Hello world!"). "<br>";

    echo "The strpos() function :<br>";
    echo "Posisi kata world=" . strpos("Hello World!","world"). "<br>";

    echo "Fungsi chr(ascii):<br>";
    echo chr(38)."<br>";
    echo chr(046). "<br>";
    echo chr(0x26). "<br>";

    echo "Fungsi explode():<br>";
    $teks="Selamat Belajar PHP";
    $teksarray=explode(" ", $teks);
    echo $teksarray[0]."<br>";
    echo $teksarray[1]."<br>";
    echo $teksarray[2]."<br>";

    echo "Fungsi implode():<br>";
    $teks = array('Selamat','Belajar','PHP');
    echo implode(" ",$teks)."<br>";

    echo "Fungsi ltrim():<br>";
    $teks = "   \t\tSelamat Belajar!";
    echo "tanpa ltrim:". $teks;
    echo "<br>";
    echo "dengan ltrim:" . ltrim($teks)."<br>";

    echo "Fungsi rtrim():<br>";
    $str = "Selamat Belajar     ";
    $str2 = "Pemrograman PHP";
    echo "Dengan rtrim: " . rtrim($str);
    echo $str2;
    echo "<br>";
    echo "Tanpa rtrim : " . $str;
    echo $str2."<br>";  

    echo "Fungsi strstr():<br>";
    echo strstr("Hi folks!",0)."<br>";

    echo "Fungsi substr():<br>";
    echo substr("abcdef", -1)."<br>";
    echo substr("abcdef", -2)."<br>";
    echo substr("abcdef", 0, -1)."<br>";
    echo substr("abcdef", 0, -2)."<br>";

    echo "Fungsi trim(): <br>";
        $teks = "\t\tThese are a few words :) . . .";
    echo "Tanpa trim:".$teks;
    echo "<br>";
    echo "Dengan trim:".trim($teks);
    
    ?>
</body>
</html>