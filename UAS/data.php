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
  <style type="text/css">
    tr{
      text-align: left;
    }
  </style>
</head>

<body>
    <?php
  include "koneksi.php";
  session_start();
  if ($_SESSION['status_login'] == 'admin_login'){
  ?>
  <!-- navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container" id="navbar">
      <div class="navbar-header">
        <a href="indexAdm.php" class="navbar-brand navbar-link"><img src="assets/img/logo1.png"><?php echo $_SESSION['username'] ?></a>
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
  <div id="home">
    <div class="isi">
      <div class="container atas">
  <br>
    <h3 style="text-align: center;">Laporan Data By Admin</h3>
    <br><br>
    <h3 style="text-align: center;">User </h3><hr>
    <br>
     <table class="table">
        <thead>
            <tr>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Kursus</th>
                        <th>Jenis Kelamin</th>      
                        <th>Pembayaran</th>  
                        <th>Action</th>
            </tr>
        </thead>
        <?php
            include "koneksi.php";

            $query="SELECT l.id, l.username, l.password, l.jk, l.telepon, l.alamat, p.id_pelanggan, p.kursus, p.pembayaran FROM pendaftaran p JOIN loginuser l ON p.id = l.id";
            $result=mysqli_query($connect, $query);

            if (mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> <?php echo $row["username"]?></td>
            <td> <?php echo $row["telepon"] ?></td>
            <td> <?php echo $row["alamat"] ?></td>
            <td> <?php echo $row["kursus"] ?></td>
            <td> <?php echo $row["jk"] ?></td>
            <td> <?php echo $row["pembayaran"] ?></td>
            <td> <a href="siswa/editForm.php?id=<?php echo $row['id']; ?>">Edit</a> || <a href="siswa/hapus.php?id=<?php echo $row['id']; ?>">Hapus</a></td>
        <?php
                }
            }
            else{
                echo "0 results";
            }
        ?>
        </table>
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
    header("Refresh:0; url=indexAdm.php");
  }
  ?>
</body>

</html>   
