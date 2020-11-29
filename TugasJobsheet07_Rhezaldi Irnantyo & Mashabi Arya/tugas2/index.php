<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Hitung Gaji</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <header>
        <nav id="webBrand" class="navbar-dark bg-secondary py-2 px-2">
            <a href="index.php" class="navbar-brand font-weight-bold">
                <img src="img/user.png" width="50" height="50" class="d-inline-block align-top" alt="">
                <span class="navbar-text mx-2 text-white">
                    Website Hitung Gaji Karyawan
                </span>
            </a>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item font-weight-bold text-white"><a href="#" class="nav-link">Home</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <center>
            <h1 class="mt-3"> Hitung Gaji Anda</h1>
        </center>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-7 my-3">
                <form method="post" action="">
                    <h5>Hitung Gaji Pegawai</h5>
                    <hr>
                    <div class="form-group">
                        <label for="InputName">Masukkan nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama" value="<?= isset($_POST['nama']) ? $_POST['nama'] : '' ?>" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="InputBanyakBulan">Masukkan Banyak Bulan</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="jmlBulan" placeholder="Masukkan banyak bulan (angka)" value="<?= isset($_POST['jmlBulan']) ? $_POST['jmlBulan'] : '' ?>">
                    </div>
                    <button type="submit" class="btn btn-success" name="submit" onclick="showHasil()">Submit</button>
                </form>
            </div>
            <div class="col-4 my-3 ml-2">
                <div class="card mx-3 mb-3">
                    <div class="card-header">
                        <h5 class="card-title">Hasil hitung</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <?php
                            if (isset($_POST['submit'])) {
                                echo '<p>Nama: <b>' . $_POST['nama'] . '</b></p>';
                            } ?>
                        </p>
                        <p class="card-text">
                            <?php
                            if (isset($_POST['submit'])) {
                                define("tunjangan", 750000);
                                define("gajiPokok", 3500000);
                                $jumlahBulan = $_POST['jmlBulan'];
                                $nama = $_POST['nama'];
                                $pajak = 0.1;
                                $bpjs = 0.06;

                                if ($nama == "YOSI" or $nama == "yosi") {
                                    $pajak = 0.07 * (gajiPokok + tunjangan);
                                    $bpjs = 0.03 * (gajiPokok + tunjangan);
                                } else {
                                    $pajak = 0.1 * (gajiPokok + tunjangan);
                                    $bpjs = 0.06 * (gajiPokok + tunjangan);
                                }

                                $gajiBersih = ((gajiPokok + tunjangan) - ($pajak + $bpjs)) * $jumlahBulan;

                                function formatRupiah($gajiBersih)
                                {
                                    $format_rupiah = number_format($gajiBersih, '2', ',', '.');
                                    return $format_rupiah;
                                }

                                echo 'Gaji bersih Rp. <b>' . formatRupiah($gajiBersih) . '<b>';
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer style="margin-top: 90px;">
        <nav id="webBrand" class="navbar-dark bg-dark text-center">
            <span class="navbar-text mx-2">
                Copyright by Aldi & Masha &copy; 2019
            </span>
        </nav>
    </footer>

    <script>
        function showHasil() {
            var x = document.getElementById(showCard);
            if (x.style.display == "none") {
                x.style.display = "inline-block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

</body>

</html>