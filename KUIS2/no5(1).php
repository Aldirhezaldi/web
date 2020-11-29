<!DOCTYPE html>
<html>
    <head><title>Res No 5</title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.4.1.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
    </head>
    <body>
        <header>
        <nav id="webBrand" class="navbar-dark bg-primary" style="padding-left: 16px;">
            <a class="navbar-brand">
                <img src="img/gundam.png"  width="60px" height="60px"> AldiRhezaldi</a>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="no1.php" class="nav-link">Soal 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="no2.php" class="nav-link">Soal 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="no3.php" class="nav-link">Soal 3</a>
                    </li>
                    <li class="nav-item">
                        <a href="no4.php" class="nav-link">Soal 4</a>
                    </li>
                    <li class="nav-item">
                        <a href="no5.php" class="nav-link active">Soal 5</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
        <main>
                <div class="alert alert-primary" role="alert">
                    Successfully Registered!
                </div>
                <div class="container" style="padding: 20px; margin: 10 px auto; margin-left: auto; margin-right: auto;">
                    <div class="row">
                        <div class="col-lg-12">
                        <?php
                            $nama = $_POST['nama'];
                            $nokerja = $_POST['nokerja'];
                            $mobile = $_POST['mobile'];
                            $home = $_POST['home'];
                            $office = $_POST['office'];
                            $unit = $_POST['unit'];
                            $departement = $_POST['departement'];
                            $ttl = $_POST['ttl'];
                            $alamat = $_POST['postalAddress'];
                            echo "<h2><b>Information User</b><hr></h2><br>";
                            $target_path = "img/";
                            $target_path = $target_path . basename(
                                $_FILES['uploadedfile']['name']);

                            if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)){
                                $image = $_FILES["uploadedfile"]["name"]; 
                                $img = "img/".$image;
                                echo "<center><img style='width:200px;height:300px;border:1px solid black;' src=\"$img\"><br><br></center>";
                            }else{
                                echo "There was an error during uploading the file, please try again<br>";
                            }
                        ?>
                        <table>
                        <tr>
                            <td>Name</td>
                            <td> : <?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <td>No Kerja</td>
                            <td> : <?php echo $nokerja; ?></td>
                        </tr>
                        <tr>
                            <td>No Telpon HP</td>
                            <td> : <?php echo $mobile; ?></td>
                        </tr>
                        <tr>
                            <td>No Telp Rumah</td>
                            <td> : <?php echo $home; ?></td>
                        </tr>
                        <tr>
                            <td>No Telp Kantor</td>
                            <td> : <?php echo $office; ?></td>
                        </tr>
                        <tr>
                            <td>Unit</td>
                            <td> : <?php echo $unit; ?></td>
                        </tr>
                        <tr>
                            <td>Departement</td>
                            <td> : <?php echo $departement; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td> : <?php echo $ttl; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td> : <?php echo $alamat; ?></td>
                        </tr>
                    </table>
                        <br>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Yang tertanda pada biodata diatas: </h4>
                            <p>Dengan secara sukarela, demokratis dan penuh kesadaran menyatakan diri sebagai Anggota Serikat Pekerja Forum Komunikasi Jasa Penunjang Migas di PT. Badak NGL (SP-FKKPM) dengan ketentuan sebagai berikut : </p>
                            <hr>
                            <p class="mb-0">
                                <ul>
                                    <li>Mematuhi dan mentaati Anggaran Dasar, Anggaran Rumah Tangga dan Peraturan Organisasi</li>
                                    <li>Membela dan menunjang tinggi nama baik organisasi</li>
                                    <li>Membayar uang iuran Rp.5000/Bulan</li>
                                </ul>
                                <br>
                                Tertanda Admin Website
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>  
        <footer>
            <nav id="webBrand" class="navbar-dark bg-primary text-center">
                <span class="navbar-text mx-2">Copyright by AldiRhezaldi &copy; 2019</span>
            </nav>
    </footer> 
    </body>
    </html>