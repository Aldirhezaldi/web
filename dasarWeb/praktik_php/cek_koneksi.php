<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";

	$connect = mysqli_connect($namaHost, $username, $password);

	if($connect){
		echo "Koneski dengan MySQL berhasil";
	}
	else{
		echo "Koneksi dengan MySQL gagal ". mysql_connect_error();
	}
?>