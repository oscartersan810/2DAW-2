<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Ejercicios 1-14</h1>
    <?php
    if (!isset($_REQUEST['numero'])) {
    ?>
    <form action="" method="post">
        <label for="numero">Numero: </label>
        <input type="number" name="numero" id="numero"><br><br>
        <input type="submit" value="Enviar numero">
    </form>
    <?php
    } else {
        include_once "Funciones.php";
        $numero = $_REQUEST['numero'];

        //Función esPrimo
        if (esPrimo($numero) == false) {
            echo "El numero $numero NO es primo";
        } else{
            echo "El número $numero SI es primo";
        }
        echo "<br>";
        echo siguientePrimo($numero);
    } 
    ?>
</body>
</html>