<!DOCTYPE html>
<html>
<head>
    <title>EDIT DATA</title>
</head>
<body>
    <a href="index.php" class="menu">BERANDA</a> ||
    <a href="add.php" class="menu">TAMBAH DATA</a>
    <h1>EDIT DATA</h1>
    <?php
        include "Praktek13-1.php";
        $Id_Mobil = $_GET['Id_Mobil'];
        $query = mysqli_query($koneksi, "SELECT * FROM mobil WHERE Id_Mobil = '$Id_Mobil'");
        $res = mysqli_fetch_array($query);
    ?>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Id Mobil</td>
                <td><input type="text" name="Id_Mobil" value="<?php echo $res['Id_Mobil'] ?>" ></td>
            </tr>
            <tr>
                <td>Merk</td>
                <td><input type="text" name="Merk" value="<?php echo $res['Merk'] ?>" ></td>
            </tr>
            <tr>
                <td>Model</td>
                <td><input type="text" name="Model" value="<?php echo $res['Model'] ?>" ></td>
            </tr>
            <tr>
                <td>Tipe</td>
                <td><input type="text" name="Tipe" value="<?php echo $res['Tipe'] ?>" ></td>
            </tr>
            <tr>
                <td>Pintu</td>
                <td><input type="number" name="Pintu" value="<?php echo $res['Pintu'] ?>" ></td>
            </tr>
            <tr>
                <td>Tahun Produksi</td>
                <td><input type="text" name="Tahun_Produksi" value="<?php echo $res['Tahun_Produksi'] ?>" ></td>
            </tr>
            <tr>
                <td>Negara Pembuat</td>
                <td><input type="text" name="Negara_Pembuat" value="<?php echo $res['Negara_Pembuat'] ?>" ></td>
            </tr>
            <tr>
                <td>Jenis Produksi</td>
                <td><input type="text" name="Jenis_Produksi" value="<?php echo $res['Jenis_Produksi'] ?>" ></td>
            </tr>    
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="edit" value="Edit">
                    <button type="reset" value="Reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    include "Praktek13-1.php";
    if(isset($_POST['edit'])){
    $Id_Mobil       = $_POST['Id_Mobil'];
    $Merk           = $_POST['Merk'];
    $Model          = $_POST['Model'];
    $Tipe           = $_POST['Tipe'];
    $Pintu          = $_POST['Pintu'];
    $Tahun_Produksi = $_POST['Tahun_Produksi'];
    $Negara_Pembuat = $_POST['Negara_Pembuat'];
    $Jenis_Produksi = $_POST['Jenis_Produksi'];
    $queryupdate= $koneksi->query("UPDATE mobil SET Merk = '$Merk',
                                Model           = '$Model',
                                Tipe            = '$Tipe',
                                Pintu           = '$Pintu',
                                Tahun_Produksi  = '$Tahun_Produksi',
                                Negara_Pembuat  = '$Negara_Pembuat',
                                Jenis_Produksi  = '$Jenis_Produksi'
                                WHERE Id_Mobil = '$Id_Mobil'");
    if($queryupdate) {
      header('location: Praktek13-2.php');
    } else {
      echo "Data Gagal Diedit";
    }
  }
?>