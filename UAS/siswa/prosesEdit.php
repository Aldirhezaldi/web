<?php
	include "koneksi.php";

	$username=$_GET['username'];
	$jk=$_GET['jk'];
	$telepon=$_GET['telepon'];
	$alamat=$_GET['alamat'];
	$kursus=$_GET['kursus'];
	$pembayaran=$_GET['pembayaran'];

	$query= "UPDATE pendaftaran set username='$username', jk='$jk', telepon='$telepon', alamat='$alamat', kursus='$kursus', pembayaran='$pembayaran' WHERE username='$username'";
	$result=mysqli_query($connect, $query);

	if($result){
		echo '<script language="javascript">
              alert ("Edit Berhasil Di Lakukan!");
              window.location="../data.php";
              </script>';
	}else{
		echo "Gagal update data" . mysqli_error($connect);
	}
?>