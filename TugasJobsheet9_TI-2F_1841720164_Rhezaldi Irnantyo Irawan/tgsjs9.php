<html>

<head>
    <title>Tugas Form Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>

<body>
	<header>
        <nav id="webBrand" class="navbar-dark bg-primary" style="padding-left: 16px;">
            <a class="navbar-brand">
                <img src="img/gundam.png"  width="60px" height="60px"> AldiRhezaldi</a>
        </nav>
    </header>
    <h1 style="text-align: center;">Pengisian Form</h1>
   <hr>
    <form action="uploadtgsjs9.php" method="POST" onsubmit="validasi()" enctype="multipart/form-data">
        <div class="container">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Enter nama">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">No telepon </label>
                <input type="number" class="form-control" id="no" placeholder="Enter nomer">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat </label>
                <input type="text" class="form-control" id="alamat" placeholder="Enter alamat">
            </div>
            <br>
            <input class="btn-success" name="uploadedfile" type="file">
            <br><br>
            <input class="btn btn-primary" name="Upload File" type="submit" value="Submit">
    </form>
    </div>
    <footer>
            <nav id="webBrand" class="navbar-dark bg-primary text-center">
                <span class="navbar-text mx-2">Copyright by AldiRhezaldi &copy; 2019</span>
            </nav>
    </footer>
</body>
<script type="text/javascript">
    function validasi() {
        var nama = document.getElementById("nama").value;
        if (nama == "") {
            alert('Anda harus mengisi nama')
            return true;
        }
        var email = document.getElementById("email").value;
        if (email == "") {
            alert('Anda harus mengisi email')
            return true;
        }
        var no = document.getElementById("no").value;
        if (no == "") {
            alert('Anda harus mengisi No telepon')
            return true;
        }
        var alamat = document.getElementById("alamat").value;
        if (alamat == "") {
            alert('Anda harus mengisi alamat')
            return true;
        }
    }
</script>

</html>