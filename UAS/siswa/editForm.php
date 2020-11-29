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
    <title>Edit</title>
</head>
<body>
    <header>
       <nav id="webBrand" class="navbar-dark bg-primary" style="padding-left: 16px;">
            <a class="navbar-brand">
                <img src="assets/img/logo1.png"  width="90px" height="30px"> ARTHERY ART COURSE</a>
        </nav>
    </header>
    <?php
        include "koneksi.php";
        $id=$_GET['id'];
        $query="SELECT l.id, l.username, l.password, l.jk, l.telepon, l.alamat, p.id_pelanggan, p.kursus, p.pembayaran FROM pendaftaran p JOIN loginuser l ON p.id = l.id";
        $result=mysqli_query($connect, $query);
    ?>
    <div class="container">
    <form action="prosesEdit.php" method="GET">
        <table>
            <?php
            while($row=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> Id : </td>
                <td><input type="text" name="id" value="<?php echo $row['id'];?>">
            </tr>
            <tr>
                <td> Username : </td>
                <td><input type="text" name="username" value="<?php echo $row['username'];?>">
            </tr>
            <tr>
                <td> Telepon : </td>
                <td> <input type="text" name="telepon" value="<?php echo $row['telepon'];?>"></td>
            </tr>
            <tr>
                <td> JENIS KELAMIN : </td>
                <td> <input type="text" name="jk" value="<?php echo $row['jk'];?>"></td>
            <tr>
                <td> Kursus : </td>
                <td> <input type="text" name="kursus" value="<?php echo $row['kursus'];?>"></td>
            </tr>
            <tr>
                <td> Alamat : </td>
                <td> <input type="text" name="alamat" value="<?php echo $row['alamat'];?>"></td>
            </tr>
            <tr>
                <td> Pembayaran : </td>
                <td> <input type="text" name="pembayaran" value="<?php echo $row['pembayaran'];?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan" value="Simpan"> </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    </form>

</body>
</html>