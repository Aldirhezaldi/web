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
    <title>Soal 3</title>
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
                        <a href="no3.php" class="nav-link active">Soal 3</a>
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
        <div class="container-fluid p-3">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Form Soal 3 Hasil</h2>
                    <?php
                    if (isset($_POST['submit'])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $email2 = $_POST['email2'];
                        $countryCode = $_POST['countryCode'];
                        $cityCode = $_POST['cityCode'];
                        $phoneNumber = $_POST['phoneNumber'];
                        $mobilePhoneNumber = $_POST['mobilePhoneNumber'];
                        $postalAddress = $_POST['postalAddress'];
                        $myList = $_POST['myList'];
                        $password = $_POST['password'];
                         echo '
                         <br><br>
        <table>
        <tr>
            <td>Nama</td>
            <td> : ' . $name . '</td>
        </tr>
        <tr>
            <td>Email 1</td>
            <td> : ' . $email . '</td>
        </tr>
        <tr>
            <td>Email 2</td>
            <td> : ' . $email2 . '</td>
        </tr>
        <tr>
            <td>Country Code</td>
            <td> : ' . $countryCode . '</td>
        </tr>
        <tr>
            <td>City Code</td>
            <td> : ' . $cityCode . '</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td> : ' . $phoneNumber . '</td>
        </tr>
        <tr>
            <td>Mobile Phone</td>
            <td> : ' . $mobilePhoneNumber . '</td>
        </tr>
        <tr>
            <td>Portal</td>
            <td> : ' . $postalAddress . '</td>
        </tr>
        <tr>
            <td>Country</td>
            <td> : ' . $myList . '</td>
        </tr>
        <tr>
            <td>Password</td>
            <td> : ' . $password . '</td>
        </tr>
    </table>';
                    } else {
                        echo ("Tidak ada data");
                    }
                    ?><br>
                </div>
            </div>
        </div>
    </main>
    <br><br><br><br>
        <footer>
            <nav id="webBrand" class="navbar-dark bg-primary text-center">
                <span class="navbar-text mx-2">Copyright by AldiRhezaldi &copy; 2019</span>
            </nav>
        </footer>
</body>

</html>