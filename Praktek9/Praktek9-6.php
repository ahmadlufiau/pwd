<?php 
    /*  Program : Lat04-f.php 
        By      : Ahmad Lufi Alfianul Ula
        NIM     : 3.34.16.1.02
        Date    : 21 Desember 2017
        Description : Looping - Foreach
    */
    $arr = array(1,2,3,4);
    echo ("Elemen Array Awal : <br>");
    foreach ($arr as &$value)
    {
        echo ("$value\n");
        $value = $value * 2;
    }
    //$arr is now array(2,4,6,8)
    unset($value);
    echo ("<br>Elemen Array Sesudah Dikalikan 2 : <br>");
    foreach ($arr as &$value)
    {
        echo ("$value\n");
    }

?>
