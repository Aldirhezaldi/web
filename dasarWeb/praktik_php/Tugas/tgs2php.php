<!DOCTYPE html>
<html>
    <head></head>
    <style type="text/css">
        body{
    background-color: whitesmoke;
    font-family: Arial;
  margin: 0;
}
.header {
  background-color: blue;
  padding: 20px;
  text-align: center;
}
.header1{
  background-color: grey;
  padding: 20px;
  color: white;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: blue;
  text-align: center;
}
    </style>
    <body>
        <header>
        <div class="header">
            <h1>Tugas Nomor 2</h1>
        </div>
        <div class="header1">
            <a href="home.html">Back</a>
        </div>
    </header>
        <?php
            $langganan = $_POST['langganan'];
            $jumlahLembar = $_POST['jumlahLembar'];
            echo "<b>Rincian Harga</b><hr><br>";
            echo "Status Langganan: ".$langganan."<br>";
            echo "Jumlah Lembar : ".$jumlahLembar."<br>";      
            
            if($langganan == "Langganan"){
                $lembarHarga = 190;
                $totalHarga = $jumlahLembar * $lembarHarga;
                echo "Total Harga : ".$totalHarga."<br>";
            }else if($langganan == "Tidak Langganan"){
                if($jumlahLembar<150){
                    $lembarHarga = 300;
                }else if($jumlahLembar >= 150){
                    $lembarHarga = 250;
                }
                $totalHarga = $jumlahLembar * $lembarHarga;
                echo "Total Harga : ".$totalHarga."<br>";
            }
        ?><br>
        <a href="tgs2.php"><button>Back To Serice Menu</button></a>
    <div class="footer">
            <h1 style="text-align: center;">
                Copyright by AldiRhezaldi &copy; 2019</h1>
        </div>
    </footer>
    </body>
</html>