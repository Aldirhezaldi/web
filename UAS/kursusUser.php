<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.4.1.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Asap|Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap|Pontano+Sans|Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Nanum+Gothic+Coding&display=swap" rel="stylesheet">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
    <title>Login</title>
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
                        <a href="utamaUser.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="kursusUser.php" class="nav-link active">Kursus</a>
                    </li>
                    <li class="nav-item">
                        <a href="pembayaranUser.php" class="nav-link">Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a href="dataUser.php" class="nav-link">Data</a>
                    </li>
                    <li class="nav-item">
                        <a href="homepage.php" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <img src="img/1.jpg" style="background-repeat: no-repeat; width: 1349px; height: 531px; opacity: 0.9">
      <div class="skuy" 
            style="position: absolute; 
            right: 390px; 
            bottom: 300px;
            color: white;
            font-size: 70px;
            font-style: bold;
            font-family: 'Asap';
            text-align: center;"
            >
         Pemilihan Kursus
       </div>
       <div class="skuy2" 
            style="position: absolute; 
            right: 420px; 
            bottom: 200px;
            color: white;
            font-family: 'Nanum Gothic Coding';
            font-size: 30px;
          
            text-align: center;"
            >
         Pilihlah Sesuai Keinginanmu
       </div>
       <br><br><br>
      
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
         <a href=""><button type="submit" class="btn btn-primary">Ingin Bergabung?</button></a>
      </div>
      <div class="col-md-5">
        <img src="img/melukis.jpg" style="width: 450px; height: 450px;">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        <a href=""><button type="submit" class="btn btn-primary">Ingin Bergabung?</button></a>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/musik.png" style="width: 450px; height: 450px;">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
         <a href=""><button type="submit" class="btn btn-primary">Ingin Bergabung?</button></a>
      </div>
      <div class="col-md-5">
        <img src="img/pahat.jpg" style="width: 450px; height: 450px;">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->
    <br><br><br>

  </div>
   <h3 style="text-align: center;">Ingin Daftar? <br><br>
      <a href="daftarUser.php"><button type="submit" class="btn btn-success">Daftar</button></a>
    <br><br><br>
       <footer>
            <nav id="webBrand" class="navbar-dark bg-primary text-center">
                <span class="navbar-text mx-2">Copyright by AldiRhezaldi &copy; 2019</span>
            </nav>
      </footer>

</body>
</html> 