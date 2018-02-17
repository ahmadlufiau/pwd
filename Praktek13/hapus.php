<?php
    include "Praktek13-1.php";
    $Id_Mobil = $_GET['Id_Mobil'];
    $queryhapus= $koneksi->query("DELETE FROM mobil WHERE Id_Mobil='$Id_Mobil'");
    if($queryhapus){
      header('location: Praktek13-2.php');
    } else {
      echo "Data Gagal Dihapus";
    }
?>