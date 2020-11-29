<!DOCTYPE HTML>
<html>
    <head></head>
    <link rel="stylesheet" type="text/css" href="tgs2.css">
    <body>
    <header>
        <div class="header">
            <h1>Tugas Nomor 2</h1>
        </div>
    </header>
        <form method="POST" action="tgs2php.php">
            <input type="radio" name="langganan" value="Langganan">Langganan<br>
            <input type="radio" name="langganan" value="Tidak Langganan">Tidak Langganan<br>
            Jumlah Lembar : <input type="number" placeholder="150" name="jumlahLembar" required><br><br>
            <button type="submit" class="btn btn-info" value="Kirim">Hitung Harga</button>
            <button type="reset" class="btn btn-danger" value="Reset">Reset Form</button>
        </form>
    <footer>
        <div class="footer">
            <h1 style="text-align: center;">
                Copyright by AldiRhezaldi &copy; 2019</h1>
        </div>
    </footer>
    </body>
</html>