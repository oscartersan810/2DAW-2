<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>

<body>
    <?php
    $num1 = rand(1, 20);
    $num2 = rand(1, 20);
    $num3 = rand(1, 20);
    $num4 = rand(1, 20);
    $num5 = rand(1, 20);
    $num6 = rand(1, 20);
    $numSerie = rand(1, 999);
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
    //Resultados
    $aciertos = 0;

    // Comprobamos los números seleccionados por el usuario y los comparamos con los ganadores
    if (isset($_REQUEST['n1']) && ($_REQUEST['n1'] == $num1 || $_REQUEST['n1'] == $num2 || $_REQUEST['n1'] == $num3 || $_REQUEST['n1'] == $num4 || $_REQUEST['n1'] == $num5 || $_REQUEST['n1'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n2']) && ($_REQUEST['n2'] == $num1 || $_REQUEST['n2'] == $num2 || $_REQUEST['n2'] == $num3 || $_REQUEST['n2'] == $num4 || $_REQUEST['n2'] == $num5 || $_REQUEST['n2'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n3']) && ($_REQUEST['n3'] == $num1 || $_REQUEST['n3'] == $num2 || $_REQUEST['n3'] == $num3 || $_REQUEST['n3'] == $num4 || $_REQUEST['n3'] == $num5 || $_REQUEST['n3'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n4']) && ($_REQUEST['n4'] == $num1 || $_REQUEST['n4'] == $num2 || $_REQUEST['n4'] == $num3 || $_REQUEST['n4'] == $num4 || $_REQUEST['n4'] == $num5 || $_REQUEST['n4'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n5']) && ($_REQUEST['n5'] == $num1 || $_REQUEST['n5'] == $num2 || $_REQUEST['n5'] == $num3 || $_REQUEST['n5'] == $num4 || $_REQUEST['n5'] == $num5 || $_REQUEST['n5'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n6']) && ($_REQUEST['n6'] == $num1 || $_REQUEST['n6'] == $num2 || $_REQUEST['n6'] == $num3 || $_REQUEST['n6'] == $num4 || $_REQUEST['n6'] == $num5 || $_REQUEST['n6'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n7']) && ($_REQUEST['n7'] == $num1 || $_REQUEST['n7'] == $num2 || $_REQUEST['n7'] == $num3 || $_REQUEST['n7'] == $num4 || $_REQUEST['n7'] == $num5 || $_REQUEST['n7'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n8']) && ($_REQUEST['n8'] == $num1 || $_REQUEST['n8'] == $num2 || $_REQUEST['n8'] == $num3 || $_REQUEST['n8'] == $num4 || $_REQUEST['n8'] == $num5 || $_REQUEST['n8'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n9']) && ($_REQUEST['n9'] == $num1 || $_REQUEST['n9'] == $num2 || $_REQUEST['n9'] == $num3 || $_REQUEST['n9'] == $num4 || $_REQUEST['n9'] == $num5 || $_REQUEST['n9'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n10']) && ($_REQUEST['n10'] == $num1 || $_REQUEST['n10'] == $num2 || $_REQUEST['n10'] == $num3 || $_REQUEST['n10'] == $num4 || $_REQUEST['n10'] == $num5 || $_REQUEST['n10'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n11']) && ($_REQUEST['n11'] == $num1 || $_REQUEST['n11'] == $num2 || $_REQUEST['n11'] == $num3 || $_REQUEST['n11'] == $num4 || $_REQUEST['n11'] == $num5 || $_REQUEST['n11'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n12']) && ($_REQUEST['n12'] == $num1 || $_REQUEST['n12'] == $num2 || $_REQUEST['n12'] == $num3 || $_REQUEST['n12'] == $num4 || $_REQUEST['n12'] == $num5 || $_REQUEST['n12'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n13']) && ($_REQUEST['n13'] == $num1 || $_REQUEST['n13'] == $num2 || $_REQUEST['n13'] == $num3 || $_REQUEST['n13'] == $num4 || $_REQUEST['n13'] == $num5 || $_REQUEST['n13'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n14']) && ($_REQUEST['n14'] == $num1 || $_REQUEST['n14'] == $num2 || $_REQUEST['n14'] == $num3 || $_REQUEST['n14'] == $num4 || $_REQUEST['n14'] == $num5 || $_REQUEST['n14'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n15']) && ($_REQUEST['n15'] == $num1 || $_REQUEST['n15'] == $num2 || $_REQUEST['n15'] == $num3 || $_REQUEST['n15'] == $num4 || $_REQUEST['n15'] == $num5 || $_REQUEST['n15'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n16']) && ($_REQUEST['n16'] == $num1 || $_REQUEST['n16'] == $num2 || $_REQUEST['n16'] == $num3 || $_REQUEST['n16'] == $num4 || $_REQUEST['n16'] == $num5 || $_REQUEST['n16'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n17']) && ($_REQUEST['n17'] == $num1 || $_REQUEST['n17'] == $num2 || $_REQUEST['n17'] == $num3 || $_REQUEST['n17'] == $num4 || $_REQUEST['n17'] == $num5 || $_REQUEST['n17'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n18']) && ($_REQUEST['n18'] == $num1 || $_REQUEST['n18'] == $num2 || $_REQUEST['n18'] == $num3 || $_REQUEST['n18'] == $num4 || $_REQUEST['n18'] == $num5 || $_REQUEST['n18'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n19']) && ($_REQUEST['n19'] == $num1 || $_REQUEST['n19'] == $num2 || $_REQUEST['n19'] == $num3 || $_REQUEST['n19'] == $num4 || $_REQUEST['n19'] == $num5 || $_REQUEST['n19'] == $num6)) $aciertos++;
    if (isset($_REQUEST['n20']) && ($_REQUEST['n20'] == $num1 || $_REQUEST['n20'] == $num2 || $_REQUEST['n20'] == $num3 || $_REQUEST['n20'] == $num4 || $_REQUEST['n20'] == $num5 || $_REQUEST['n20'] == $num6)) $aciertos++;

    ?>

    <h4>Has tenido <?= $aciertos ?> acierto/s</h4>

    <?php
    $dineroActual = 50; //Dinero Inicial que sería 50
    $dineroObtenido = 0;
    ?>
    <h4>Tu dinero Apostado es: <?= $dineroActual ?>€</h4>
    <?php

    switch ($aciertos) {
        case 0:
        case 1:
        case 2:
        case 3:
            $dineroActual = 0;
            echo "<h4>Dinero total: $dineroActual €</h4>";
            break;
        case 4:
            echo "<h4>Dinero total: $dineroActual €</h4>";
            break;
        case 5:
            $dineroObtenido = 30;
            echo "<h4>Has ganado: $dineroObtenido €</h4>";
            $dineroActual += $dineroObtenido;
            echo "<h4>Dinero total: $dineroActual €</h4>";
            break;
        case 6:
            $dineroObtenido = 100;
            echo "<h4>Has ganado: $dineroObtenido €</h4>";
            $dineroActual += $dineroObtenido;
            echo "<h4>Dinero total: $dineroActual €</h4>";
            break;
    }

    //Comprobamos si el numero de serie es correcto

    if (isset($_REQUEST['numeroSerie']) && ($_REQUEST['numeroSerie'] == $numSerie)) {
        $dineroObtenido=500;
        echo "<h4>Has ganado: $dineroObtenido €</h4>";
        $dineroActual+=$dineroObtenido;
        echo "<h4>Dinero total: $dineroActual €</h4>";
    }

    ?>
</body>

</html>