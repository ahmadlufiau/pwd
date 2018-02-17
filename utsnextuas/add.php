<?php 
    include "koneksi.php";
    if(isset($_POST['tambah']))
    {
        $nim       = $_POST['nim'];
        $nama           = $_POST['nama'];
        $alamat          = $_POST['alamat'];
        $querytambah = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('$nim', '$nama', '$alamat')") or die(mysqli_error());
        if($querytambah) {
            header('location: index.php');
        } else{
            echo "Data Gagal Disimpan";
        }
    }
?>