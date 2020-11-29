<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Fungsi count() </h2>
		<?php
			$menu = array("rawon", "sate", "nasi goreng");
			$arrLength = count($menu);

			echo "Menu hari ini adalah : <br>";
			for($x = 0; $x < $arrLength; $x++){
				echo $menu[$x] . "<br>";
			}
			echo "<br> Saya lapar, saya ingin makan ". "<b>$menu[2]</b>";
		?>

</body>
</html>