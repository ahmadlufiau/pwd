<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Data</title>
</head>
<body>
    <a href="Praktek13-1.php">BERANDA</a> ||
    <a href="add.php">TAMBAH DATA</a><br><br>
    <form method="post">
        <tr>
            <th>Cari Mobil
            <input name="Id_Mobil" type="text">
            <input type="submit" name="cari2" value="Search"></th>
        </tr>
    </form>
    <br>
    <table border="1" cellspacing="0" cellpadding="4">
    <tr style="text-align:center;">
        <td>ID Mobil</td>
        <td>Merk</td>
        <td>Model</td>
        <td>Tipe</td>
        <td>Pintu</td>
        <td>Tahun Pembuat</td>
        <td>Negara Pembuat</td>
        <td>Jenis Produksi</td>
    </tr>
    <?php 
    include "Praktek13-1.php";
    if(isset($_POST['cari2'])){
    $cari = $_POST['Id_Mobil'];
    $sql = "select * from mobil where Id_Mobil like '%$cari%' or Merk like '%$cari%' or Model like '%$cari%'";
    $query = mysqli_query($koneksi,$sql);
    while ($r = mysqli_fetch_array($query)){
    ?>
    <tr>
    <td><?php echo $r['Id_Mobil'];?></td>
    <td><?php echo $r['Merk'];?></td>
    <td><?php echo $r['Model'];?></td>
    <td><?php echo $r['Tipe'] ?></td>
    <td><?php echo $r['Pintu'] ?></td>
    <td><?php echo $r['Tahun_Produksi'] ?></td>
    <td><?php echo $r['Negara_Pembuat'] ?></td>
    <td><?php echo $r['Jenis_Produksi'] ?></td>
    <?php

    }}
    ?>
    </tr>
    </table>
</body>
</html>