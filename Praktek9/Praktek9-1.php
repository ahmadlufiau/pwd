<?php 
    /*  Program : Lat04-a.php 
        By      : Ahmad Lufi Alfianul Ula
        NIM     : 3.34.16.1.02
        Date    : 21 Desember 2017
        Description : Looping While
    */

    $currentDate = time();
        print("Days left before Friday:\n");
        print("<ol>\n");
        while(date("l", $currentDate) !="Monday")
        {
            print("<li>" . date ("l", $currentDate). "\n");
            $currentDate += (60*60*24);
        }
        print("</ol>");

?>
