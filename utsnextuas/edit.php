<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Lufi">
    <link rel="icon" href="image/favicon.ico">
    <title>UTS Praktek - Ahmad Lufi ALfianul Ula</title>
    <!-- Bootstrap CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html {
            position: relative;
            min-height: 100%;
        }
        
        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
        }
        
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            background-color: #f5f5f5;
        }
        
        body>.container {
            padding: 60px 15px 0;
        }
        
        .container .text-muted {
            margin: 20px 0;
        }
        
        .footer>.container {
            padding-right: 15px;
            padding-left: 15px;
        }
        
        code {
            font-size: 80%;
        }
    </style>
</head>

<body>
    <!-- Fixed Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="index.html">POLINES</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="index.html">Data Mahasiswa</a></li>
                </ul>
            </div>
            <!--/.nav-collapse-->
        </div>
    </nav>

    <div class="container">
            <h1 >Data Mahasiswa</h1>
            <p class="lead">Data Mahasiswa Prodi Teknik Informatika Politeknik Negeri Semarang</p>
        <div class="row col-md-12">
          <div class="col-md-4">
            <p><font color="blue">Input Data Mahasiswa</font></p>
             <?php
        include "koneksi.php";
        $nim = $_GET['nim'];
        $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
        $res = mysqli_fetch_array($query);
    ?>
            <form action="" method="POST">
              <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" placeholder="NIM" value="<?php echo $res['nim'] ?>">
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $res['nama'] ?>">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" rows="5"><?php echo $res['alamat'] ?></textarea>
              </div>
              <div class="form-group">
                <label>Foto</label>
                <input type="file">
              </div>
              <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-primary">Batal</button>
            </form>
          </div>
          <div class="col-md-8">
          <p><font color="blue">Data Mahasiswa IK-2</font></p>
          <div class="table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th class="text-center">NIM</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
        include "koneksi.php";
        $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa") or die (mysqli_error());
        if(mysqli_num_rows($query) == 0) {
            echo "Tidak ada data yang tersedia";
        } else {
            while ($r = mysqli_fetch_array($query)): ?>

        <tr style:"text-align:center;">
            <td><?php echo $r['nim'] ?></td>
            <td><?php echo $r['nama'] ?></td>
            <td><?php echo $r['alamat'] ?></td>
            <td>
            <a href="edit.php?nim=<?php echo $r['nim'] ?>">Edit</a> ||
            <a href="hapus.php?nim=<?php echo $r['nim'] ?>" onClick='return confirm("Apakah Ada yakin menghapus?")'>Hapus</a>
            </td>
        </tr>
        <?php
        endwhile;
        }
        ?>
                </tbody>  
            </table>
          </div>
          </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Prodi D3 Teknik Informatika POLINES 2016</p>
        </div>
    </footer>

    <script src="public/js/jquery-3.2.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
</body>

</html>
<?php
    include "koneksi.php";
    if(isset($_POST['edit'])){
    $nim       = $_POST['nim'];
    $nama           = $_POST['nama'];
    $alamat          = $_POST['alamat'];
    $queryupdate= $koneksi->query("UPDATE mahasiswa SET nama = '$nama',
                                alamat           = '$alamat'
                                WHERE nim = '$nim'");
    if($queryupdate) {
      header('location: index.php');
    } else {
      echo "Data Gagal Diedit";
    }
  }
?>