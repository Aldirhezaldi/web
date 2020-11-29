<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ARTHERY</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>
  <?php
  include "koneksi.php";
  session_start();
  if ($_SESSION['status_login'] == 'user_login'){
    $usernameNow = $_SESSION['username'];
  ?>
  <!-- navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container" id="navbar">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand navbar-link"><img src="assets/img/logo1.png"><?php echo $_SESSION['username'] ?></a>
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- jumbotron -->
  <div id="background">
    <div class="jumbotron">
      <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">ARTHERY is biggest art coure website in Indonesia.</p>
      <h1 style="font-family: Arial, Helvetica, sans-serif;">MAGNIFICENCE</h1>
    </div>
  </div>
  <!-- jumbotron -->
  <?php
      $query = "select * from loginuser where username='$usernameNow'";
      $result = mysqli_query($connect, $query);
      while ($row = mysqli_fetch_array($result)) {
  ?>

  <div id="home">
    <div class="isi">
      <div class="container atas">
        <h3 style="text-align: center;">Daftar Kursus</h3>
    <br><br>
   <form action="prosesdaftarUser.php" method="post" name="form1">
  <div class="form-row">
    <div class="form-group ">
      <label for="id"></label>
      <input type="hidden" class="form-control" value="<?php echo $row['id']?>" id="id" name="id">
    <!-- </div>
    <div class="form-group col-md-6">
      <label for="telepon">Telepon</label>
      <input type="text" class="form-control" id="telepon" name="telepon">
    </div>
  </div> -->
  <div class="form-group">
    <label for="alamat"></label>
    <input type="hidden" class="form-control" id="alamat" name="alamat">
  </div>
  <div class="form-row">
    <div class="form-group">
      <label for="kursus">Kursus</label>
      <select id="kursus" class="form-control" name="kursus">
        <option selected>Lukis</option>
        <option>Pahat</option>
        <option>Tari</option>
        <option>Musik</option>
      </select>
    </div>
    <!-- <div class="form-group col-md-4">
      <label for="jk">Jenis Kelamin</label>
      <select id="jk" class="form-control" name="jk">
        <option selected>Laki-laki</option>
        <option>Perempuan</option>
      </select>
    </div> -->
     <div class="form-group">
      <label for="pembayaran">Pembayaran</label>
      <select id="pembayaran" class="form-control" name="pembayaran">
        <option selected>Lunas</option>
        <option>Belum Lunas</option>
      </select>
    </div>
  </div> 
  <button type="submit" class="btn btn-primary">DAFTAR</button>
</form>
<?php 
}
?>
      </div>
    </div>
  </div>
  <div id="about">
    <div class="container footer">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1> <img src="assets/img/logo1.png" width="180px"></h1>
        <h2 style="font-family:sans-serif;">About Us</h2>
        <p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">This website was born as a medium to showcase anxieties and humanoid paranoia in an art form, in which each creation contains satisfaction and magnificence concept to it...</p>
      </div>
    </div>
  </div>
  <div id="kaki">
    <div class="container">
      <h5 class="text-center">ARTHERY. © 2019</h5>
    </div>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <?php
  }else{
    header("Refresh:0; url=index.php");
  }
  ?>

</body>

</html>
