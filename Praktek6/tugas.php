<?php 
    echo "Fungsi String print() : <br>";
    $teks = "Ahmad Lufi Alfianul Ula <br>";
    print($teks);
    print("Pemrograman Web Dinamis");
    print("<br><br>");

    echo "Fungsi println() : <br>";
    $teks = "Ahmad Lufi Alfianul Ula <br>";
    $a = 20;
    printf("Format b : %b<br>",$a);
    printf("Format c : %c<br>",$a);
    printf("Format d : %d<br>",$a);
    printf("Format f : %f<br>",$a);
    printf("Format o : %o<br>",$a);
    printf("Format x : %x<br>",$a);
    printf("Format s : %s<br>",$a);
    printf("<br><br>");

    echo "Fungsi print_r() : <br>";
    $a = "Ahmad Lufi Alfianul Ula <br>";
    $b = 20;
    $c = [50,100,150];
    print_r($a);
    print("<br>");
    print_r($b);
    print("<br>");
    print_r($c);
    print("<br><br>");

    echo "Fungsi md5() : <br>";
    $teks = "AhmadLufiAlfianulUla";
    echo md5($teks);
    print("<br><br>");

    echo "Fungsi str_split() : <br>";
    $teks = "Ahmad Lufi Alfianul Ula";
    print_r(str_split($teks));
    print("<br><br>");

    echo "Fungsi stripos() : <br>";
    $teks = "Lufi";
    echo "Letak string Lufi : " .stripos("Nama saya Ahmad Lufi Alfianul Ula",$teks);

?>
