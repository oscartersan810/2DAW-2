<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
    <?php
     function escribirNumerosMod($numeros, $modo){

        if ($modo=="ampliar") {
            $fp = fopen("datosEjercicio.txt", "a");
            foreach ($numeros as $numero) {
                fwrite($fp, $numero. PHP_EOL);
            }
            fclose($fp);
        }

        if ($modo=="sobreescribir") {
            $fp = fopen("datosEjercicio.txt", "w");
            foreach ($numeros as $numero) {
                fwrite($fp, $numero. PHP_EOL);
            }
            fclose($fp);
        }
     }

     if (isset($_REQUEST['numeros'])) {
        $numeros = unserialize(base64_decode($_REQUEST['numeros']));
        $numero = $_REQUEST['numero'];

        $numeros[] = $numero;

        if (isset($_REQUEST['ampliar'])) {
            escribirNumerosMod($numeros, "ampliar");
        }
        if (isset($_REQUEST['sobreescribir'])) {
            $numeros = [];
            escribirNumerosMod($numeros, "sobreescribir");
        }
     } else {
        $numeros = [];
     }

     print_r($numeros);
    ?>

    <form action="" method="post">
        <label for="Escribir Numero">Numero: </label>
        <input type="number" id="numero" name="numero"><br><br>
        <input type="hidden" name="numeros" value="<?= base64_encode(serialize($numeros)) ?>">
        <input type="submit" value="Ampliar" name="ampliar">
        <input type="submit" value="Sobreescribir" name="sobreescribir">
    </form><br><br>
    <?php
    echo "Numeros en el archivo: ";
    echo "<br>";
    if (file_exists("datosEjercicio.txt")) {
        $fp = fopen("datosEjercicio.txt", "r");
        while (!feof($fp)) {
            $linea = fgets($fp);
            echo $linea;
        } 
    }
    
    
    ?>
</body>
</html>