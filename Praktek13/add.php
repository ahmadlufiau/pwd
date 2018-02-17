<!DOCTYPE html>
<html>
<head>
    <title>TAMBAH DATA</title>
</head>
<body>  
    <a href="praktek13-2.php">BERANDA</a> ||
    <a href="add.php">TAMBAH DATA</a>
    <h2>FORM TAMBAH DATA</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Id Mobil</td>
                <td><input type="text" name="Id_Mobil"  placeholder="Id Mobil" /></td>
            </tr>
            <tr>
                <td>Merk</td>
                <td><input type="text" name="Merk" placeholder="Merk" /></td>
            </tr>
            <tr>
                <td>Model</td>
                <td><input type="text" name="Model" placeholder="Model"></td>
            </tr>
            <tr>
                <td>Tipe</td>
                <td><input type="text" name="Tipe" placeholder="Tipe"></td>
            </tr>
            <tr>
                <td>Pintu</td>
                <td><input type="number" name="Pintu" placeholder="Pintu"></td>
            </tr>
            <tr>
                <td>Tahun Produksi</td>
                <td><input type="text" name="Tahun_Produksi" placeholder="Tahun Produksi"></td>
            </tr>
            <tr>
                <td>Negara Pembuat</td>
                <td><input type="text" name="Negara_Pembuat" placeholder="Negara Pembuat"></td>
            </tr>
            <tr>
                <td>Jenis Produksi</td>
                <td><input type="text" name="Jenis_Produksi" placeholder="Jenis Produksi"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tambah" value="Tambah">
                <button type="reset" value="Reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php 
    include "Praktek13-1.php";
    if(isset($_POST['tambah']))
    {
        $Id_Mobil       = $_POST['Id_Mobil'];
        $Merk           = $_POST['Merk'];
        $Model          = $_POST['Model'];
        $Tipe           = $_POST['Tipe'];
        $Pintu          = $_POST['Pintu'];
        $Tahun_Produksi = $_POST['Tahun_Produksi'];
        $Negara_Pembuat = $_POST['Negara_Pembuat'];
        $Jenis_Produksi = $_POST['Jenis_Produksi'];
        $querytambah = mysqli_query($koneksi, "INSERT INTO mobil VALUES('$Id_Mobil', '$Merk', '$Model', '$Tipe', '$Pintu', '$Tahun_Produksi', '$Negara_Pembuat', '$Jenis_Produksi')") or die(mysqli_error());
        if($querytambah) {
            header('location: Praktek13-2.php');
        } else{
            echo "Data Gagal Disimpan";
        }
    }
?>