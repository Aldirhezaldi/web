<?php 
    include "koneksi.php";
    $username = $_POST['username'];
    $result = mysqli_query($connect, "SELECT * FROM loginadmin WHERE username ='$username'");
    $cek_user=mysqli_num_rows($result);
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("Username Sudah Ada Yang Menggunakan");
              window.location="register.php";
              </script>';
              exit();
    }
    else {
        $password    =md5($_POST['password']);
        $jk = $_POST['jk'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];
        mysqli_query($connect, "INSERT INTO loginadmin (username, password, jk, telepon, alamat)
        VALUES ('$username', '$password', '$jk', '$telepon', '$alamat')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="home.php";
              </script>';
              exit();
    }
?>