<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.4.1.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
   <style type="text/css">
    .container{
    width: 30%;
    margin-top: 9%;
    box-shadow: 0 3px 20px rgba(0, 0, 0, 0, 3);
    padding: 40px;
}
  </style>
    <title>Membuat Form Pendaftaran Registrasi Dengan PHP MySQL - Tutorial</title>
</head>
<body>
	<header>
       <nav id="webBrand" class="navbar-dark bg-primary" style="padding-left: 16px;">
            <a class="navbar-brand" href="homepage.php">
                <img src="img/gundam.png"  width="60px" height="60px"> AldiRhezaldi</a>
        </nav>
    </header>
    <div class="container">
    <h2>REGISTRASI</h2>
    <form action="simpanUser.php" method="post" name="form1">        
         <table>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
            </div>
            <div class="form-group">
      <label for="jk">Jenis Kelamin</label>
      <select id="jk" class="form-control" name="jk">
        <option selected>Laki - laki</option>
        <option>Wanita</option>
      </select>
    </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="telepon" class="form-control" placeholder="Masukkan Telpeon">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamatmat">
            </div>
            <tr>
                <td><button type="submit" class="btn btn-primary">DAFTAR</button></td>
            </tr>
        </table>
    </form>
</body>
</html>