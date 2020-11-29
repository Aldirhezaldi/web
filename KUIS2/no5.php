<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.4.1.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
    <title>Soal 5</title>
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
        <div class="container-fluid p-3">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">SP-FKPPM Registration</h2>
                    <div class="container-fluid p-2">
                        <div class="row">
                            <div class="col-sm-6 ml-auto mr-auto">
                                <form class="form-horizontal" enctype="multipart/form-data" method="POST"
                                    action="no5(1).php">
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="nama">Nama Anda:</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="nama" id="nama" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="nokerja">No Pekerja:</label>
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" id="nokerja" name="nokerja"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="mobile">No Telepon HP:</label>
                                        <div class="col-sm-12">
                                            <input type="tel" class="form-control" id="mobile" name="mobile" min="0"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="home">No Telepon
                                            Rumah:</label>
                                        <div class="col-sm-12">
                                            <input type="tel" class="form-control" id="home" name="home" min="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="office">No Telepon
                                            Kantor:</label>
                                        <div class="col-sm-12">
                                            <input type="tel" class="form-control" id="office" min="0" name="office">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="unit">Unit : </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="unit" name="unit" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="departement">Departement : </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="departement" name="departement"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-5" for="ttl">Tempat Tanggal Lahir: </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="ttl" name="ttl" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="alamat">Alamat : </label>
                                        <div class="col-sm-12">
                                            <textarea style="height: 60px; width: 610px;" name="postalAddress"
                                                id="alamat" name="alamat" placeholder="PostalAddress"></textarea><br>
                                        </div>
                                    </div>
                                    <div class="ml-3">
                                        <label class="control-label" for="foto">Upload Foto :</label>
                                        <input type="file" name="uploadedfile" required id="foto">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-info ml-3" value="Simpan"
                                        name="simpan">Validasi</button>
                                    <button type="submit" class="btn btn-success ml-3" value="Simpan"
                                        name="simpan">Simpan</button>
                                    <button type="reset" class="btn btn-danger ml-2" value="Reset">Reset</button>
                                </form>
                            </div>
                        </div>
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