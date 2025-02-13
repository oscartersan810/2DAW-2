<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
    $x = 144;
    $y = 999; 
    
    $suma = $y+$x;
    $resta = $y-$x;
    $mlp = $y*$x;
    $division = $y/$x;

    echo "Valor 1: $x <br>"; 
    echo "Valor 2: $y <br>";
    echo "Resultado suma: $suma <br>";
    echo "Resultado resta: $resta <br>";
    echo "Resultado multiplicacion: $mlp <br>";
    echo "Resultado division: ",(int)$division,"<br>";
    ?>
</body>
</html>