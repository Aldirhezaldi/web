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
    <?php
session_start();
if (isset($_POST['save'])) {
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["password"] = $_POST['password'];
}
?>
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
        <div class="container-fluid p-3">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Form Soal 3</h2>
                    <form action="no3(2).php" method="post">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" required placeholder="Rhezaldi Irnantyo Irawan"><br><br>
                        <label for="email">Email ID:</label>
                        <input type="email" placeholder="rhezaldiirnantyo339g@gmail.com" id="email" name="email"
                            required><br><br>
                        <label for="email2">Alternate Email ID: </label>
                        <input type="email" placeholder="aldirhezaldi339@gmail.com" id="email2" name="email2"><br><br>
                        <label for="CountryCode">Phone:</label>
                        <input type="tel" placeholder="Country Code" name="countryCode">
                        <input type="tel" placeholder="City Code" name="cityCode">
                        <input type="tel" placeholder="Phone Number" name="phoneNumber"><br><br>
                        <label for="mobile">Mobile Phone:</label>
                        <input type="tel" placeholder="085850336940" name="mobilePhoneNumber" id="mobile"><br><br>
                        <label for="postal">Your Postal Address :</label>
                        <textarea style="height: 60px; width: 200px;" name="postalAddress" id="postal"
                            placeholder="PostalAddress"></textarea><br><br>
                        <label for="myList">Country :</label>
                        <select id="myList" name="myList">
                            <option value="null">----Select One----</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Jepang">Jepang</option>
                            <option value="Amerika">Amerika</option>
                        </select><br><br>
                        <label for="password">Password:</label>
                        <input type="password" name="password" type="password" id="password" required
                            placeholder="Isi Dengan Benar!!!"><br><br>
                        <label for="re-password">Re-Enter Password: </label>
                        <input type="password" name="re-password" type="password" id="re-password" required
                            oninput="check(this)" placeholder="Isi Dengan Benar!!!"><br><br>
                        <script language='javascript' type='text/javascript'>
                        function check(input) {
                            if (input.value != document.getElementById('password').value) {
                                input.setCustomValidity('Password Must be Matching.');
                            } else {
                                input.setCustomValidity('');
                            }
                        }
                        </script>
                        <input type="checkbox" name="agree" id="agree" required>I Accept the <a
                            href="http://polinema.ac.id">Terms of Use</a><br><br>
                        <button type="submit" name="submit" class="btn btn-info" value="Kirim"
                            onclick="onClick()">Continue</button>
                        <script type="text/javascript">
                        function onClick() {
                            alert("Apakah data sudah benar?");
                        }
                        </script>
                        <button type="reset" class="btn btn-danger" value="Reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <br><br>
        <footer>
            <nav id="webBrand" class="navbar-dark bg-primary text-center">
                <span class="navbar-text mx-2">Copyright by AldiRhezaldi &copy; 2019</span>
            </nav>
        </footer>
</body>

</html>