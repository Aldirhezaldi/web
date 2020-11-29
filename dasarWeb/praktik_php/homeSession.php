<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		session_start();

		if($_SESSION['status'] == 'login'){
			echo "Selamat Datang" . $_SESSION['username'];
			?>
			<br> <a href="sessionLogout.php"> Log Out </a>
			<?php
		}
		?>
</body>
</html>