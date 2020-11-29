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
            <br>
            <h3>TEMPAT MENGHITUNG!!!</h3>
                <div class="container" style="padding: 20px; margin: 10 px auto; margin-left: auto; margin-right: auto;">
                    <div class="row">
                        <div class="col-lg-12">
                        <?php 
                            @$jari_jari = $_REQUEST['jari-jari'];
                            $volume = 4/3 * 3.14 * $jari_jari * $jari_jari * $jari_jari;
                        ?>
                        <form method="GET">
                        <table>
                            <tr>
                                <td>Jari Jari: </td>
                                <td>=</td>
                                <td><input type="text" name="jari-jari" value="<?php echo $jari_jari; ?>"/>cm<br/></td>
                            </tr>
                        </table>
                        <br>
                        <button type="submit" class="btn btn-info" value="Calculate">HITUNG</button><br/><br/>
                        <?php
                            echo "Volume Bola = ".$volume." cm3 <br/><br>";
                            echo "Apakah Anda Ingin Mengulangi? <a href='no2.php'>Y</a> / <a href='bola.php'>N</a>";
                        ?>
                        </form>
                    </div>
                </div>
            </main>   
            <br><br><br><br><br><br><br><br><br>
            <footer>
            <nav id="webBrand" class="navbar-dark bg-primary text-center">
                <span class="navbar-text mx-2">Copyright by AldiRhezaldi &copy; 2019</span>
            </nav>
        </footer>
    </body>
    </html>