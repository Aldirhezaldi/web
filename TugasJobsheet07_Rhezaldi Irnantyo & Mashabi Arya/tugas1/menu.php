<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script>
        var sayTerimakasih = () => alert("Terimakasih!");
    </script>
</head>

<body>
    <header>
        <nav id="webBrand" class="navbar-dark bg-dark py-2 px-2">
            <a href="index.html" class="navbar-brand font-weight-bold">
                <img src="img/makann.png" width="50" height="50" class="d-inline-block align-center">
                <span class="navbar-text mx-2 my-2"></span>Website Pemesanan Makanan Warung ABC
                </span>
            </a>
        </nav>
        <nav class="navbar navbar-expand-md navbar-dark bg-warning">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-white" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-white" href="menu.php">Pilih Menu disini</a>
                    </li>
            </div>
        </nav>
    </header>
        <form action="" method="post">
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                    <select class="custom-select mr-sm-2 ml-2" id="inlineFormCustomSelect" name="menu">
                        <option selected value=" ">Pilih Menu...</option>
                        <?php
                        $options = array('Ayam', 'Lele', 'Tahu', 'Tempe', 'Bebek');
                        foreach ($options as $menu) {
                            $selected = @$_POST['menu'] == $menu ? ' selected="selected"' : '';
                            echo '<option value="' . $menu . '"' . $selected . '>' . $menu . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="col-auto my-1">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </div>
        </form>
        <div class="row m-1">
            <div class="col">
                <?php
                if (isset($_POST['submit'])) {
                    echo '<h5>Menu yang dipilih:</h5>';
                    echo '<h4>' . $_POST['menu'] . '</h4>';
                    echo '<p class="mt-4">Apakah ingin pilih menu lagi??</p>';
                    echo '<a href="menu.php" class="btn btn-success btn-lg" tabindex="-1" role="button">Ya</a>';
                    echo '<a href="index.html" class="btn btn-danger btn-lg ml-1" tabindex="-1" role="button" onclick="sayTerimakasih()">Tidak</a>';
                }
                ?>
            </div>
        </div>
        <footer style="margin-top: 415px;">
            <nav id="webBrand" class="navbar-dark bg-dark text-center">
                <span class="navbar-text mx-2">Copyright by Aldi & Masha &copy; 2019</span>
            </nav>
        </footer>
</body>

</html>