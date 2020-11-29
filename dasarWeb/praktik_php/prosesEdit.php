<?php
	include "koneksi.php";

	$id=$_GET['id'];
	$nama=$_GET['nama'];
	$alamat=$_GET['alamat'];

	$query= "UPDATE mahasiswa set nama='$nama', alamat='$alamat' WHERE id='$id'";
	$result=mysqli_query($connect, $query);

	if($result){
		echo "Behasil update data ke database ";
		?>
	<a href="homeCRUD.php">Lihat data di Tabel</a>
	<?php
	}else{
		echo "Gagal update data" . mysqli_error($connect);
	}
?>