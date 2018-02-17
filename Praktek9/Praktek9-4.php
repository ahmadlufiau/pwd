<?php 
    /*  Program : Lat04-d.php
        By      : Ahmad Lufi Alfianul Ula
        NIM     : 3.34.16.1.02
        Date    : 21 Desember 2017
        Description : Looping - Do While
    */
    $currentDate = time();
    print("Days left before next friday:\n");
    print("<ol>\n");
    do
    {
        print("<li>" .date("l". $currentDate). "\n");
        $currentDate += (60*60*24);
    }
    while(date("l", $currentDate) != "Friday");
    print("</ol>\n");

?>
