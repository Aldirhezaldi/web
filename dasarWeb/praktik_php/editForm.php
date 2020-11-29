<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include "koneksi.php";
		$id=$_GET['id'];
		$query="SELECT * FROM mahasiswa WHERE id='$id'";
		$result=mysqli_query($connect, $query);
	?>
	<form action="prosesEdit.php" method="GET">
		<table>
			<?php
			while($row=mysqli_fetch_array($result)){
			?>
			<tr>
				<td> ID : </td>
				<td><input type="text" name="id" value="<?php echo $row['id'];?>">
			</tr>
			<tr>
				<td> NAMA : </td>
				<td> <input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
			</tr>
			<tr>
				<td> ALAMAT : </td>
				<td> <textarea name="alamat" rows="5" cols="20"> <?php echo $row['alamat'];?></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Simpan"> </td>
			</tr>
			<?php
			}
			?>
		</table>
	</form>

</body>
</html>