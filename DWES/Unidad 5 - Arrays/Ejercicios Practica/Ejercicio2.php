<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <?php
        if (isset($_REQUEST['num'])) {
            $arrayNum = $_REQUEST['num'];
            $minimo = PHP_INT_MAX;
            $maximo = PHP_INT_MIN;

            // print_r($arrayNum);

            if (condition) {
                # code...
            }
        }
    ?>

    <form action="" method="post">
    <?php
        for ($i=1; $i <= 10 ; $i++) { 
            ?>
            Introduzca numero <?=$i ?> <input type="number" name="num[]"><br>
        <?php 
        }
    ?>
    <input type="submit" value="Enviar numeros">
    </form>
</body>
</html>