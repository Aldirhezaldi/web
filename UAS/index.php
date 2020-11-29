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
  <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <?php
  include "koneksi.php";
  session_start();
  if ($_SESSION['status_login'] == 'user_login'){
  ?>
  <!-- navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container" id="navbar">
      <div class="navbar-header">
        <a href="#" class="navbar-brand navbar-link"><img src="assets/img/logo1.png"><?php echo $_SESSION['username'] ?></a>
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav navbar-right">
          <li role="presentation"><a href="#home">HOME</a></li>
          <li role="presentation"><a href="#news">ART</a></li>
          <li role="presentation"><a href="#gallery">GALLERY</a></li>
          <li role="presentation"><a href="#data">DATA</a></li>
          <li role="presentation"><a href="#about">ABOUT</a></li>
          <li role="presentation"><a href="logoutUser.php">LOGOUT</a></li>
        </ul>
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

  <!-- container atas -->
  <div id="home">
    <div class="isi">
      <div class="container atas">
        <h1>The Satisfying Of Art</h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-music"></i>
            <h3>STRATEGIC</h3>
            <p class="text-justify"><strong>Srategic</strong>  is important because the resources available to achieve these goals are usually limited. Strategy generally involves setting goals, determining actions to achieve the goals, and mobilizing resources to execute the actions.[3] A strategy describes how the ends (goals) will be achieved by the means (resources). Strategy can be intended or can emerge as a pattern of activity as the organization adapts to its environment or competes.It involves activities such as strategic planning and strategic thinking.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-leaf"></i>
            <h3>SATISFIC</h3>
            <p class="text-justify"><strong>Satisfic</strong> s part of a different group of variables namely motivators and hygiene factors. Dissatisfaction is related to conditions around work such as working conditions, wages, security, quality of supervision and relationships with others and not the work itself. Because the factors that prevent negative reactions are called hygiene or maintainance factors. Instead satisfaction is drawn from factors related to the work itself or direct results such as the nature of the job, achievement at work, promotion opportunities and opportunities for self-development and recognition.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-camera"></i>
            <h3>EXOTIC</h3>
            <p class="text-justify"><strong>Exotic</strong> What they formulate in the exotic word is then swallowed whole without ever trying to understand it in an east-west perspective. As a large and diverse nation, and a wealth of natural resources, we are considered as something foreign; alien ’by western civilization. Unfortunately, many of us who get education then swallow it all raw, guarantee every word crammed, and change it into our identity..</p>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- container atas -->

  <!-- container bawah -->
  <div class="container bawah">
    <h1>The Satisfying Of Art</h1>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/gambar-1-A.jpg" width="200px">
        <h3>STRATEGIC</h3>
        <p class="text-center"><strong>Arthery</strong>is strategic website for art and other.</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/building.jpg" width="200px" height="200px">
        <h3>SATISFY</h3>
        <p class="text-center"><strong>Every Art</strong>have climate when the artist show their skills.</p>
      </div><div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/gambar-1-C.jpg" width="200px">
        <h3>EXOTIC</h3>
        <p class="text-center"><strong>There are</strong>exotic art in every country and every culture.</p>
      </div>
    </div>
  </div>
  <!-- container bawah -->

  <!-- container news -->
  <div id="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/gambar-2-A-1.jpg" style="height: 340px;" >
          <div class="caption">
            <h3>PAINTING</h3>
            <p class="text-justify">Painting is the practice of applying paint, pigment, color or other medium to a solid surface (called the "matrix" or "support")</p>
            <a href="daftarUser.php"><button class="btn btn-info"tyoe="button">DAFTAR</button></a>
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/gambar-2-B-1.jpg" style="width: 400px; height: 340px;">
          <div class="caption">
            <h3>DANCE</h3>
            <p class="text-justify">A sequence of rhythmic steps or movements usually performed to music, for pleasure or as a form of social interaction</p>
            <a href="daftarUser.php"><button class="btn btn-info"tyoe="button">DAFTAR</button></a>
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/gambar-2-C-1.jpg" style="width: 300px; height: 340px;">
          <div class="caption">
            <h3>SCLUPTURE</h3>
            <p class="text-justify">The art of carving, modeling, welding, or otherwise producing figurative or abstract works of art in three dimensions, as in relief, intaglio..</p>
            <a href="daftarUser.php"><button class="btn btn-info"tyoe="button">DAFTAR</button></a>
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/gambar-2-D-1.jpg" style="width: 300px; height: 340px;"">
          <div class="caption">
            <h3>MUSIC</h3>
            <p class="text-justify">Art of sound in time that expresses ideas and emotions in significant forms through the elements of rhythm, melody, harmony, and color</p>
            <a href="daftarUser.php"><button class="btn btn-info"tyoe="button">DAFTAR</button></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container news -->

  <!-- gallery -->
  <div id="gallery">
    <div class="container">
      <h1>Gallery</h1>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="satu"><img class="img-responsive" src="assets/img/gambar-3-A.jpg" width="3000px"></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="satu"><img class="img-responsive" src="assets/img/gambar-3-B.jpg" width="300px"></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="satu"><img class="img-responsive" src="assets/img/gambar-3-C.jpg" width="300px"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="dua"><img class="img-responsive" src="assets/img/gambar-3-D.jpg" width="600px"></div>
      </div>
    </div>
  </div>
  <!-- gallery -->
   <div id="data">
    <div class="container">
      <div class="row">
        <center>
          <h3>Click to see your data</h3>
          <a href="dataUser.php"><button class="btn btn-primary"tyoe="button">Data</button></a>
        </center>
        </div>
      </div>
    </div>
  </div>

  <!-- about -->
  <div id="about">
    <div class="container footer">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1> <img src="assets/img/logo1.png" width="180px"></h1>
        <h2 style="font-family:sans-serif;">About Us</h2>
        <p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">This website was born as a medium to showcase anxieties and humanoid paranoia in an art form, in which each creation contains satisfaction and magnificence concept to it...</p>
      </div>
    </div>
  </div>
  <!-- about -->

  <!-- kaki -->
  <div id="kaki">
    <div class="container">
      <h5 class="text-center">ARTHERY. © 2019</h5>
    </div>
  </div>
  <!-- kaki -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <?php
  }else{
    header("Refresh:0; url=homeUser.php");
  }
  ?>
</body>

</html>
