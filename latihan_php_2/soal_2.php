<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style_2.css">
</head>
<body>
    <div class="container">
    <?php
    $pelanggan = false;
    $lembar = 100;
    $harga = 300;
    echo "RM Photocopy <br/>";
    echo "============ <br/>";
    if ($pelanggan == true) {
        $harga = 190;
        echo "Anda berlangganan, selamat anda mendapat harga langganan <br> <br>";
    } else {
        echo "Mohon maaf, anda belum berlangganan <br>";
        if ($lembar>0 && $lembar < 150) {
            $harga = 300;
        }else if($lembar >= 150){
            $harga = 250;
        }
    }
    $bayar = $lembar * $harga;
    echo "Total bayar anda: Rp. ".$bayar."<br>";
    ?>
    </div>
</body>
</html>