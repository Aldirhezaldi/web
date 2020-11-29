<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <!-- style css -->
    <style>
    .badge{
        margin-left:3px;
    }
    </style>

    <!-- <title>Hello, world!</title> -->
    <title><?= $title ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <a class="navbar-brand" href="#">CI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="navbar-nav">
        <a class="nav-link" href="<?= base_url(); ?>Home">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="<?= base_url(); ?>mahasiswa">Data Mahasiswa</a>
        <a class="nav-link" href="<?= base_url(); ?>">About</a>
        <a class="nav-link" href="<?= base_url(); ?>login/logout">Logout</a>
      
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </div>
    </div>
  </div>
</nav>