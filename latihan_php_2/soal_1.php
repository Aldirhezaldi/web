<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style_1.css">
</head>
<body>
    <div class="container">
    <?php
    $manusia = array(
        "Jack" => 4.5,
        "Tina" => 10.6,
        "Tono" => 24.3,
        "Jamilah" => 60.3,
        "Fadhilah"  => -1
    );
    
    echo "Golongan berdasar umur: </br>";
        echo "<table border=1>";
        echo "<tr>";
            echo "<th>Nama</th>";
            echo "<th>Golongan</th>";
    foreach ($manusia as $nama => $umur) {
        echo "<tr>";
        if ($umur >= 0 && $umur <= 5) {
            echo "<td> $nama berumur $umur tahun </td>";
            echo "<td> balita </td>";
        }else if($umur > 5 && $umur <=15){
            echo "<td> $nama berumur $umur tahun </td>";
            echo "<td> kanak-kanak </td>";
        }else if($umur > 15 && $umur <=25){
            echo "<td> $nama berumur $umur tahun </td>";
            echo "<td> remaja </td>";
        }else if($umur > 25 && $umur <=60){
            echo "<td> $nama ini berumur $umur tahun </td>";
            echo "<td> dewasa </td>";
        }else if($umur > 60){
            echo "<td> $nama ini berumur $umur tahun </td>";
            echo "<td> lansia </td>";
        }else{
            echo "<td> $nama ini berumur $umur tahun </td>";
            echo "<td> error: input salah </td>";
        }
        echo "</tr>";
    }
        echo "</tr>>";
    echo "</table>";
    ?>
    </div>
</body>
</html>