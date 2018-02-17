<?php
    /*  Program : Lat02-c.php
        By      : Ahmad Lufi Alfianul Ula
        NIM     : 3.34.16.1.02
        Date    : 20 Desember 2017
        Description : IF ... ELSE
    */
    $x = 2;
    $y = 4;
    echo "IF Statement<br>";
    echo "\$x = $x<br>";
    echo "\$y = $y<br>";
    if ($x < $y) echo "\$x kurang dari \$y<br><br>";

    $x = 7;
    $y = 4;
    echo "IF ... ELSE Statement<br>";
    echo "\$x = $x<br>";
    echo "\$y = $y<br>";
    if ( $x < $y )
        echo "\$x kurang dari \$y<br><br>";
    else 
        echo "\$x lebih besar dari \$y<br><br>";

    echo "IF ... ELSEIF ... ELSE Statement";
    $d = date("D");
    echo "Hari ini adalah $d<br>";
    if ($d=="Fri")
        echo "Have a nice wekkend!<br><br>";
    elseif($d=="Sun")
        echo "Have a nice sunday!<br><br>";
    else
        echo "Have a nice day!<br><br>";
?>
