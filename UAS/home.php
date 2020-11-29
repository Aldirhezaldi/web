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
    background-color: whitesmoke;
}
  </style>
    <title>Login</title>
</head>
<body >	
	<header>
       <nav id="webBrand" class="navbar-dark bg-primary" style="padding-left: 16px;">
            <a class="navbar-brand">
                <img src="assets/img/logo1.png"  width="90px" height="30px"> ARTHERY ART COURSE</a>
        </nav>
    </header>
    <td><a href="homepage.php"><button type="submit" class="btn btn-danger">Kembali</button></a></td>
    <main>
    	<div class="container">
        <h3 class="text-center">LOGIN</h3>
        <h3 class="text-center">Admin</h3>
        <form action="loginMultiProses.php" method="POST">
            <table>
			<div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
            </div>
			<tr>
				<td><button type="submit" class="btn btn-primary">Login</button> </td>  
			</tr>
            <td> Belum Mempunyai Akun? <a href="register.php"> Klik Sini. </a></td>
        </div>
    </main>
</body>
</html>