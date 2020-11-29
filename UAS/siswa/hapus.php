<?php
	include "koneksi.php";

	$id=$_GET['id'];
	$query="DELETE l.id, l.username, l.password, l.jk, l.telepon, l.alamat, p.id_pelanggan, p.kursus, p.pembayaran FROM pendaftaran p JOIN loginuser l ON p.id = l.id";
	$result=mysqli_query($connect, $query);

	if($result){
		echo "Data berhasil dihapus";
?>
	<a href="../data.php">Lihat data di Tabel</a>
<?php
	}else{
		echo "Data gagal dihapus". mysqli_error($connect);
	}
?>