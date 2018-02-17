<?php 
    $nilai = [80,90,81,86,92,75,76,89,98,76,77,88,99,
    78,94,95,79,90,83,81,90,78,98,78];
    for($i=0;$i<24;$i++)
    {
        $jumlah = $jumlah + $nilai[$i];
    }
    $rata = $jumlah/24;
    for($d=0;$d<24;$d++)
    {
        $data = $d+1;
        echo "Nilai mahasiswa ke ".$data." : ".$nilai[$d]."<br>";
    }
    echo "Rata - rata dari nilai mahasiswa dalah ".$rata;
?>
