<?php 

    function CetakHeader($kalimat1, $kalimat2, $kalimat3)
    {
        print("<center><b>".$kalimat1."<b></center>");
        print("<center><b>".$kalimat2."<b></center>");
        print("<center><b>".$kalimat3."<b></center>");
    }
    $kal1 = "Politeknik Negeri Semarang";
    $kal2 = "Program Studi Teknik Informatika";
    $kal3 = "Pemrograman Web Dinamis";
    CetakHeader($kal1,$kal2,$kal3);

?>
