<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check The Date</title>
</head>
<body>
   <form action="checkdate.php" method="get">
    Tanggal Lahir :
    <select name="tanggal">
    <option value="0" selected> Tanggal
        <?php 
            for ($i=1; $i<32; $i++) {
                print("<option value=$i > $i");
            }
        ?>
    </option>
    </select>
    <select name="bulan">
            <option value="0" selected>Bulan</option>
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maret</option>
            <option value="4">April</option>
            <option value="5">Mei</option>
            <option value="6">Juni</option>
            <option value="7">Juli</option>
            <option value="8">Agustus</option>
            <option value="9">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
    </select>
    <select name="tahun">
            <option value="0" selected>tahun
            <?php 
                $sekarang = (integer) date ("Y");
                for ($i=$sekarang; $i > ($sekarang-120); $i--) {
                    print("<option value=$i >$i <br>\n");
                }
            ?>
            </option>
    </select>
    <br><br>
    <input type="submit" name="Cek" value="Cek">
   </form> 
</body>
</html>
