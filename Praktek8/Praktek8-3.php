<?php 
    /*  Program : Lat03-c.php 
        By      : Ahmad Lufi Alfianul Ula
        NIM     : 3.34.16.1.02
        Date    : 20 Desember 2017
        Description : Array Multidimensi
    */

    $families = array
    (
        "Ahmad"=>array
        (
            "Saad",
            "Zaid",
            "Aishah"
        ),
        "Abdullah"=>array
        (
            "Zainab"
        ),
        "Kholid"=>array 
        (
            "Abbas",
            "Aina",
            "Sholeh"
        )
    );
    echo "Anak Ahmad terdiri ". $families['Ahmad'][0] .", " .
    $families['Ahmad'][1] .", " . $families['Ahmad'][2]."<br>";
    echo "Anak Abdullah terdiri dari ". $families['Abdullah'][0]."<br>";
    echo "Anak Kholid terdiri dari ". $families['Kholid'][0].", " .
    $families['Kholid'][1] .", " . $families['Kholid'][2]."<br>"; 


?>