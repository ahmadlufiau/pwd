<?php
    include "koneksi.php";
    $nim = $_GET['nim'];
    $queryhapus= $koneksi->query("DELETE FROM mahasiswa WHERE nim='$nim'");
    if($queryhapus){
      header('location: index.php');
    } else {
      echo "Data Gagal Dihapus";
    }
?>