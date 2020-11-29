<!DOCTYPE html>
<html>
    <head><title>No 2</title>
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
                        <a href="no2.php" class="nav-link active">Soal 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="no3.php" class="nav-link">Soal 3</a>
                    </li>
                    <li class="nav-item">
                        <a href="no4.php" class="nav-link">Soal 4</a>
                    </li>
                    <li class="nav-item">
                        <a href="no5.php" class="nav-link">Soal 5</a>
                    </li>
                </ul>
            </div>
        </nav>
        </header>
        <main>
            <h2 class="text-center">KUIS NOMOR 2</h2><br>
                <div class="container" style="padding: 20px; margin: 10 px auto; margin-left: auto; margin-right: auto;">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                @$pilihanRumus = $_REQUEST['pilihanRumus'];
                            ?>
                            <h3>Pilihlah Rumus!!!</h3>
                            <br><br>
                            <ul>
                                <li>a. Volume Balok</li>
                                <li>b. Volume Kubus</li>
                                <li>c. Volume Bola</li>
                            </ol>
                            <br>
                            <form method="GET">
                                Masukkan Pilihan (Huruf): <input type="text" name="pilihanRumus" required>
                                <br><br>
                                <button type="submit" class="btn btn-info" value="Pilihh">Apakah Anda Yakin Memilih Rumus Volume Ini?</button>
                                <button type="submit" class="btn btn-success" value="Kirim"><?php 
                            if($pilihanRumus == "a"){
                                echo "<a href='balok.php'>Volume Balok</a>";
                            }else if($pilihanRumus == "b"){
                                echo "<a href='kubus.php'>Volume Kubus</a>";
                            }else if($pilihanRumus == "c"){
                                echo "<a href='bola.php'>Volume Bola</a>";
                            }
                            ?></button>
                                <button type="reset" class="btn btn-danger" value="Reset">Reset Fields</button><br>
                            </form><br>
                            
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