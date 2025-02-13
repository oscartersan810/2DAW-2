<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <h1>Ejercicio 7: Juego del bingo mejorado</h1>
    <h3>Tienes que elegir 6 numeros y el numero de serie (1-999)</h3><br><br>
    <form action="Ejercicio7b.php" method="post">
        <table border="1">
            <?php
            $c = 0;
            for ($i = 1; $i <= 7; $i++) {
            ?>
                <tr>
                <?php
                for ($j = 1; $j <= 7; $j++) {
                    $c++;
                    ?>
                    <td><input type="checkbox" name="n<?=$c ?>"><h3><?php echo($c)?></h3></td>
                    <?php
                }
            }
                ?>
        </table>
        <label for="serie">Numero serie: </label>
        <input type="number" name="nSerie" min="1" max="999"><br><br>
        <input type="submit" value="Enviar Ganadora">
    </form>
</body>

</html>