<?php 
    /*  Program : Lat04-c.php 
        By      : Ahmad Lufi Alfianul Ula
        NIM     : 3.34.16.1.02
        Date    : 21 Desember 2017
        Description : Looping - COntinue
    */
    srand(time());
    $count = 0;
    $max = 0;
    while($count < 10)
    {
        $value = rand(1,100);
        if($value < $max)
        {
            continue;
        }
        $count++;
        $max = $value;
        print($value . "<br>");
    }
?>
