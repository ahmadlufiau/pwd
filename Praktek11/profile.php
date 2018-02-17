<?php
session_start();
if(empty($_SESSION['username'])){
    header("location:tugas.php");
}else{
    echo "Selamat anda berhasil login <a href='logout.php'>Logout</a>";
}
?>
