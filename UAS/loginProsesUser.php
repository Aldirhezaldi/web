    <?php
	include "koneksi.php";

	$username=$_POST['username'];
	$password=md5($_POST['password']);

	$query="SELECT * FROM loginuser WHERE username='$username' and password='$password'";
	$result=mysqli_query($connect, $query);
	$check = mysqli_num_rows($result);
	if ($check > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status_login'] = "user_login";
        ?>
        <script type="text/javascript" src="jquery-3.4.1.js"></script>
<script>
	$(document).ready(function(){
		alert("Berhasil Login");
	});
</script>    <?php
        header("Refresh:2; url=index.php");
    } else {
        header("Refresh:0; url=homeUser.php");
    }
?>