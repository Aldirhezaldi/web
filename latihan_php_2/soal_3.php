<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style_3.css">
</head>
<body>
    <div class="container">
    <?php
    $bilangan = array(1, 3.5, 6, 8.5);

    for ($i=0; $i < 10; $i++) { 
        for ($j=0; $j < 4 ; $j++) { 
            echo $bilangan[$j]."*";
        }
        echo"<br>";
    }
    ?>
    </div>
</body>
</html>