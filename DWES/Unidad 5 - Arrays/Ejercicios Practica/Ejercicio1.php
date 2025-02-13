<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>

<body>
    <h1>Ejercicio 1</h1>
    <?php
    $numero = [];
    $cuadrado = [];
    $cubo = [];

    for ($i = 0; $i < 20; $i++) {
        $numero[$i] = rand(0, 100);
        $cuadrado[$i] = pow($numero[$i], 2);
        $cubo[$i] = pow($numero[$i], 3);
    }
    ?>
    <table border="1">
        <tr>
            <?php
            foreach ($numero as $n) {
            ?>
                <td><?= $n ?></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <?php
            foreach ($cuadrado as $c) {
            ?>
                <td><?= $c ?></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <?php
            foreach ($cubo as $cb) {
            ?>
                <td><?= $cb ?></td>
            <?php
            }
            ?>
        </tr>
    </table>
</body>

</html>