<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <?php
    function obtenerArrNum($ruta) {
        $numeros = [];
        $fp = fopen($ruta, "r");
        while (!feof($fp)) {
            $linea = fgets($fp);
            $numeros[] = $linea;
        }
        fclose($fp);
        return $numeros;
    } 
    
    $ruta = "numeros.txt";
    $numeros = obtenerArrNum($ruta);

    print_r($numeros);
    ?>
</body>
</html>