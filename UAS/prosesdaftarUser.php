
    <?php
    include "koneksi.php";

    session_start();
    if ($_SESSION['status_login'] == 'user_login') {
        # code...
    $username = $_SESSION['username'];
    $queryGetId = "select * from loginuser where username = '$username'";
    $id =$_POST['id'];
    $kursus=$_POST['kursus'];
    $pembayaran=$_POST['pembayaran'];

    $query="insert into pendaftaran(id, kursus, pembayaran) values ('$id', '$kursus', '$pembayaran')";

    if(mysqli_query($connect, $query)){
        echo '<script language="javascript">
              alert ("Pendaftaran Berhasil Di Lakukan!");
              window.location="daftarUser.php";
              </script>';
    }else {
        echo "Record Gagal Ditambahkan".mysqli_error($connect);
        }
    }
?>