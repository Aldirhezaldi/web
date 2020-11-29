<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
	for ($i=1; $i<=5; $i++){
		for($j=4; $j>=$i; $j--){
			echo " ";
		}for ($k=1; $k<=$i; $k++){
			echo "$k";
		}echo "<br>";
	}
	?>

</body>
</html>