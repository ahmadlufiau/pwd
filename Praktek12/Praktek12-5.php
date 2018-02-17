<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Isian</title>
</head>
<body>
    <h2>ISI BIODATA</h2>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
    NIM <input type="number" name="nim"> <br>
    Nama <input type="text" name="nama"> <br>
    Alamat <input type="text" name="alamat"> <br>
    Jurusan <input type="text" name="jurusan"> <br>
    <input type="submit" value="Submit">
    </form>
    <hr>
    <table border="2">
        <tr>
            <h2>Data Mahasiswa</h2>
            <td>NIM</td>
            <td width="100">Nama</td>
            <td width="100">Alamat</td>
            <td widht="100">Jurusan</td>
        </tr>
        <?php 
        if (isset($_GET['nim']) && $_GET['nama'] && $_GET['alamat'] && $_GET['jurusan'])
        {
            echo "<tr>
            <td>$_GET[nim]</td>
            <td>$_GET[nama]</td>
            <td>$_GET[alamat]</td>
            <td>$_GET[jurusan]</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
