<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 Solucion</title>
</head>
<body>
    <?php
    $num1 = rand(1, 49); 
    $num2 = rand(1, 49); 
    $num3 = rand(1, 49); 
    $num4 = rand(1, 49); 
    $num5 = rand(1, 49); 
    $num6 = rand(1, 49); 
    $numserie = rand(1, 999); 
    ?>

<table border=1 cellspacing=0 bordercolor=green>
        <tr>
            <td>
                <h3>Combinacion Ganadora</h3>
            </td>
        </tr>
        <tr>
            <td>
                <h1><?= $num1 ?></h1>
            </td>
            <td>
                <h1><?= $num2 ?></h1>
            </td>
            <td>
                <h1><?= $num3 ?></h1>
            </td>
            <td>
                <h1><?= $num4 ?></h1>
            </td>
            <td>
                <h1><?= $num5 ?></h1>
            </td>
            <td>
                <h1><?= $num6 ?></h1>
            </td>
            <td>
                <h1><?= $numSerie ?></h1>
            </td>
        </tr>
    </table>
    <?php 
    $contador = 0;
    $n = 1;
    for ($i=1; $i <=49 ; $i++) { 
        if (isset($_REQUEST["n$i"])) {
            if ($num1==$n || $num2==$n || $num3==$n || $num4 == $n || $num5==$n || $num6==$n) {
                $contador++;
            }
        }
        $n++;
    }
    ?>
</body>
</html>