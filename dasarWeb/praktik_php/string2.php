<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$numberedString = "123456789012345678901234567890";
		$fivePos = strpos($numberedString, "5");
		echo "Posisi angka 5 di dalam string adalah $fivePos";
		$fivePos2 = strpos($numberedString, "5", $fivePos + 1);
		echo "<br> Posisi angka 5 yang kedua di dalam string adalah $fivePos2";
	?>

</body>
</html>