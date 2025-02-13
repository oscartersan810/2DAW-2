<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <h1>Ejercicio 4: Bloque de pisos</h1>
    <?php
    if (isset($_REQUEST['bloque']) && isset($_REQUEST['piso'])) {
        $bloque = $_REQUEST['bloque'];
        $piso = $_REQUEST['piso'];

        echo "<h3>Has llamado al bloque $bloque piso $piso</h3>";
        echo "<a href='Ejercicio4.php'>Volver a llamar</a>";
    } else {
    ?>
        <table border="1" cellspacing="2px">
            <tr>
                <th>BLOQUE</th>
                <th>PISO</th>
                <th>ACCION</th>
            </tr>
            <?php
            for ($i = 1; $i <= 10; $i++) {
            ?>
                <?php
                for ($j = 1; $j <= 7; $j++) {
                ?>
                    <tr>
                        <th>Bloque <?= $i ?></th>
                        <td>Piso <?= $j ?></td>
                        <td><a href="Ejercicio4.php?bloque=<?php echo ($i); ?>&piso=<?php echo ($j) ?>" style="text-decoration: none;" name="llamar">Llamar Puerta</a></td>
                    </tr>
                <?php
                }
                ?>

        <?php
            }
        }
        ?>

        </table>
</body>

</html>