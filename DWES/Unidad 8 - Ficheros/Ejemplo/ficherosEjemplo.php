<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cadena = file_get_contents('texto.txt'); 
    ?>
    <?php
try {
    $cadena = file_get_contents('texto.txt');
    if ($cadena === false) {
        throw new Exception('Error al leer el archivo');
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
</body>
</html>