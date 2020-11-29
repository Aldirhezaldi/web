<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.4.1.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
    <title>Soal 3</title>
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
                        <a href="no1.php" class="nav-link">Soal 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="no2.php" class="nav-link">Soal 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="no3.php" class="nav-link active">Soal 3</a>
                    </li>
                    <li class="nav-item">
                        <a href="no4.php" class="nav-link">Soal 4</a>
                    </li>
                    <li class="nav-item">
                        <a href="no5.php" class="nav-link">Soal 5</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <form action="no3(1).php" method="post">
    <table>
        <br><br>
            <tr>
                <h2 colspan="2">Already registered? Login here</h2>
            </tr>
            <br><br><br>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" value="">Save my Email and Password<br><br></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" class="btn btn-success" name="submitdata2" value="Continue">
                    <input type="reset" class="btn btn-danger" value="Reset">
                </td>
            </tr>
    </table>
    </form>
    </main>
    <br><br><br><br><br><br><br>
        <footer>
            <nav id="webBrand" class="navbar-dark bg-primary text-center">
                <span class="navbar-text mx-2">Copyright by AldiRhezaldi &copy; 2019</span>
            </nav>
        </footer>
</body>

</html>
