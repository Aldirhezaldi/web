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
    <title>Soal 1</title>
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
                        <a href="no1.php" class="nav-link active">Soal 1</a>
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
                        <a href="no5.php" class="nav-link">Soal 5</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
                    <h2 class="text-center">Multidimensional Array</h2><br>
                    <h2 class="text-center">KUIS NOMOR 1</h2><br>
                    <table class="table">
        <thead>
            <tr>
                        <th>No</th>
                            <th>Pembeli</th>
                            <th>Barang</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Harga</th>             
            </tr>
        </thead>
                        <?php
                        $Pembeli = array(
                            array("1", "Anton", "Televisi", "07 September 2016","Lunas", "2.500.000"),
                            array("2", "Bryan", "Mesin Cuci", "10 Juli 2016","Kredit", "1.500.000"),
                            array("3", "Cherly", "Dispenser", "11 Agustus 2016","Lunas", "950.000"),
                            array("4", "Dean", "Kulkas", "15 September 2016","Lunas", "1.750.000"),
                            array("5", "Esryl", "Kipas Angin", "11 Oktober 2016","Kredit" ,"450.000"),
                            array("6", "Aldi", "Kompor", "22 November 2019","Lunas" ,"500.000")
                        );
                        echo "<tr>";
                        echo "<td>" . $Pembeli[0][0] . "</td>";
                        echo "<td>" . $Pembeli[0][1] . "</td>";
                        echo "<td>" . $Pembeli[0][2] . "</td>";
                        echo "<td>" . $Pembeli[0][3] . "</td>";
                        echo "<td>" . $Pembeli[0][4] . "</td>";
                        echo "<td>" . $Pembeli[0][5] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[1][0] . "</td>";
                        echo "<td>" . $Pembeli[1][1] . "</td>";
                        echo "<td>" . $Pembeli[1][2] . "</td>";
                        echo "<td>" . $Pembeli[1][3] . "</td>";
                        echo "<td>" . $Pembeli[1][4] . "</td>";
                        echo "<td>" . $Pembeli[1][5] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[2][0] . "</td>";
                        echo "<td>" . $Pembeli[2][1] . "</td>";
                        echo "<td>" . $Pembeli[2][2] . "</td>";
                        echo "<td>" . $Pembeli[2][3] . "</td>";
                        echo "<td>" . $Pembeli[2][4] . "</td>";
                        echo "<td>" . $Pembeli[2][5] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[3][0] . "</td>";
                        echo "<td>" . $Pembeli[3][1] . "</td>";
                        echo "<td>" . $Pembeli[3][2] . "</td>";
                        echo "<td>" . $Pembeli[3][3] . "</td>";
                        echo "<td>" . $Pembeli[3][4] . "</td>";
                        echo "<td>" . $Pembeli[3][5] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[4][0] . "</td>";
                        echo "<td>" . $Pembeli[4][1] . "</td>";
                        echo "<td>" . $Pembeli[4][2] . "</td>";
                        echo "<td>" . $Pembeli[4][3] . "</td>";
                        echo "<td>" . $Pembeli[4][4] . "</td>";
                        echo "<td>" . $Pembeli[4][5] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[5][0] . "</td>";
                        echo "<td>" . $Pembeli[5][1] . "</td>";
                        echo "<td>" . $Pembeli[5][2] . "</td>";
                        echo "<td>" . $Pembeli[5][3] . "</td>";
                        echo "<td>" . $Pembeli[5][4] . "</td>";
                        echo "<td>" . $Pembeli[5][5] . "</td>";
                        echo "</tr>";
                        ?>
                    </table>
                <br><br>
    </main>
            <h2 class="text-center">Multidimensional Array</h2><br>
            <h2 class="text-center">JAWABAN NOMOR 1</h2><br>
            <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Pembeli</th>
                <th>Barang</th>
                <th>Tanggal</th>
                <th>Harga</th>             
            </tr>
        </thead>
                        <?php
                        $Pembeli = array(
                            array("1", "Anton", "Televisi", "07 September 2016", "2.500.000"),
                            array("2", "Bryan", "Mesin Cuci", "10 Juli 2016", "1.500.000"),
                            array("", "Cherly", "Dispenser", "", "950.000"),
                            array("4", "Dean", "Kulkas", "15 September 2016", "1.750.000"),
                            array("5", "", "", "11 Oktober 2016", "450.000")
                        );
                        echo "<tr>";
                        echo "<td>" . $Pembeli[0][0] . "</td>";
                        echo "<td>" . $Pembeli[0][1] . "</td>";
                        echo "<td>" . $Pembeli[0][2] . "</td>";
                        echo "<td>" . $Pembeli[0][3] . "</td>";
                        echo "<td>" . $Pembeli[0][4] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[1][0] . "</td>";
                        echo "<td>" . $Pembeli[1][1] . "</td>";
                        echo "<td>" . $Pembeli[1][2] . "</td>";
                        echo "<td>" . $Pembeli[1][3] . "</td>";
                        echo "<td>" . $Pembeli[1][4] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[2][0] . "</td>";
                        echo "<td>" . $Pembeli[2][1] . "</td>";
                        echo "<td>" . $Pembeli[2][2] . "</td>";
                        echo "<td>" . $Pembeli[2][3] . "</td>";
                        echo "<td>" . $Pembeli[2][4] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[3][0] . "</td>";
                        echo "<td>" . $Pembeli[3][1] . "</td>";
                        echo "<td>" . $Pembeli[3][2] . "</td>";
                        echo "<td>" . $Pembeli[3][3] . "</td>";
                        echo "<td>" . $Pembeli[3][4] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[4][0] . "</td>";
                        echo "<td>" . $Pembeli[4][1] . "</td>";
                        echo "<td>" . $Pembeli[4][2] . "</td>";
                        echo "<td>" . $Pembeli[4][3] . "</td>";
                        echo "<td>" . $Pembeli[4][4] . "</td>";
                        echo "</tr>";
                        ?>
        </table>
    <footer>
            <nav id="webBrand" class="navbar-dark bg-primary text-center">
                <span class="navbar-text mx-2">Copyright by AldiRhezaldi &copy; 2019</span>
            </nav>
    </footer>
</body>
</html>

<!-- <?php
                        $Pembeli = array(
                            array("1", "Anton", "Televisi", "07 September 2016", "2.500.000"),
                            array("2", "Bryan", "Mesin Cuci", "10 Juli 2016", "1.500.000"),
                            array("", "Cherly", "Dispenser", "", "950.000"),
                            array("4", "Dean", "Kulkas", "15 September 2016", "1.750.000"),
                            array("5", "", "", "11 Oktober 2016", "450.000")
                        );
                        echo "<tr>";
                        echo "<td>" . $Pembeli[2][0] . "</td>";
                        echo "<td>" . $Pembeli[2][1] . "</td>";
                        echo "<td>" . $Pembeli[2][2] . "</td>";
                        echo "<td>" . $Pembeli[2][3] . "</td>";
                        echo "<td>" . $Pembeli[2][4] . "</td>";
                        echo "</tr>";
                        ?>
 -->



