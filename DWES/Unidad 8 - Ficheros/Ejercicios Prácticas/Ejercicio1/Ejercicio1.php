<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Ficheros</title>
</head>
<body>
    <h1>Ejercicio 1 Ficheros</h1>
    <?php
    function escribirTresNumeros($n1, $n2, $n3) {
        if (isset($_REQUEST['archivo'])) {
            $archivo = $_REQUEST['archivo'];
            $fp = fopen($archivo, "w");
            fputs($fp, "Numero 1: $n1, Numero 2: $n2, Numero 3: $n3". PHP_EOL);
            fclose($fp); 
        } 
        
    } 

    if (isset($_REQUEST['n1']) && isset($_REQUEST['n2']) && isset($_REQUEST['n3'])) {
        escribirTresNumeros($_REQUEST['n1'], $_REQUEST['n2'], $_REQUEST['n3']);
    } 
    
    if (isset($_REQUEST['archivoExistente'])) {
        $existente = $_REQUEST['archivoExistente'];

        header('Location: ' . $_REQUEST['archivoExistente']);
        // $fp = fopen($existente, "r");
        // while (!feof($fp)) {
        //     $linea = fgets($fp);
        //     echo $linea . "<br />";
        // }
        // fclose($fp);
        ?>

        <a href="Ejercicio1.php">Volver Atras</a>

        <?php 
    } else {
    ?>

    <form action="" method="post">
        <label for="primerNumero">Primer número: </label>
        <input type="number" name="n1" id="n1" required><br><br>
        <label for="segundoNumero">Segundo número: </label>
        <input type="number" name="n2" id="n2" required><br><br>
        <label for="tercerNumero">Tercer número: </label>
        <input type="number" name="n3" id="n3" required><br><br>
        <label for="nombreArchivo">Nombre Archivo</label>
        <input type="text" name="archivo" id="archivo" placeholder="ej: numeros.txt"><br><br>
        <input type="submit" value="Enviar Datos y Guardar">
    </form><br><br>

    <form action="" method="post">
        <label for="verFichero">Ver fichero existente: </label>
        <input type="text" name="archivoExistente" id="existente">
        <input type="submit" value="Ver Fichero">
    <?php
    }
    ?> 
</body>
</html>