<?php
include_once "DadoPoker.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiradas Poker</title>
</head>
<body>
    <h1>Tiradas</h1>
    <?php
        $dado = new DadoPoker();

        $dado->tira(5);
    ?>
    <table border="1" style="text-align: center;">
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
        </tr>
        <tr>
    <?php 
        foreach ($dado->getUltimaTirada() as $value) {
            echo "<td>".$value."</td>";
        }
    ?>
        </tr>
    </table>

    <?php
    echo "<p>La última tirada es: ".$dado->nombreFigura()."</p>";
    echo "<p>Tiradas Totales: ".$dado->getTiradasTotales()."</p>"
    ?>
</body>
</html>