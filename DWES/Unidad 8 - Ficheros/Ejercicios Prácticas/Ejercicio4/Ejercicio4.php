<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <h1>Ejercicio 4</h1>
    <?php
    function escribirTresNumeros($n1, $n2, $n3)
    {
        $fp = fopen("numeros.txt", "w");
        fwrite($fp, $n1 . PHP_EOL);
        fwrite($fp, $n2 . PHP_EOL);
        fwrite($fp, $n3 . PHP_EOL);
        fclose($fp);
    }

    function obtenerSuma($ruta)
    {
        if (file_exists($ruta)) {
            $suma = 0;
            $fp = fopen($ruta, "r");

            while (!feof($fp)) {
                $linea = fgets($fp);
                $suma += $linea;
            }
            fclose($fp);
            return $suma;
        }
    }

    //Crear el archivo con los numeros asigados por parámetros
    if (isset($_REQUEST['escribir'])) {
        escribirTresNumeros(2, 8, 14);
    }

    //Sumar los números creado en el archivo
    if (isset($_REQUEST['suma'])) {
        $ruta = "numeros.txt";
        $sumaNumeros = obtenerSuma($ruta);

        $fp = fopen("suma.txt", "w");
        fputs($fp, $sumaNumeros . PHP_EOL);
        fclose($fp);
    }

    ?>

    <form action="" method="post">
        <label for="EscribirNumeros">Ejecutar Escribir Numeros:</label>
        <input type="submit" value="Ejecutar Escribir Números" name="escribir"><br><br>
        <label for="HacerSuma">Hacer la suma: </label>
        <input type="submit" value="Mostrar suma" name="suma">
    </form>

    <?php
     
    ?>
</body>

</html>