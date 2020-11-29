<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	session_unset();
	session_destroy();

	echo "All session variables are now removed, and the sesison is destroyed.";
?>

</body>
</html>