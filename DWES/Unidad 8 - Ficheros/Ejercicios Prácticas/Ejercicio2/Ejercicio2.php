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

    $ruta = 'numeros.txt'; 
    $suma = obtenerSuma($ruta);
    
    echo "La suma de los números en el archivo $ruta es: $suma";
    ?>
</body>
</html>