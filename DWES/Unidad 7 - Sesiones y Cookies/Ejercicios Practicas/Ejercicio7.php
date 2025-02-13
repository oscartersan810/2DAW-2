<?php
if (isset($_REQUEST['color'])) {
    $color = $_REQUEST['color'];
    setcookie("color", $color, time() + 3*24*3600);
    
} else if (isset($_COOKIE['color'])){
    $color = $_COOKIE['color'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>

    <style>
        body{
            background-color: <?= $color ?>;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">Elige el color de fondo de la pagina.</label><br><br>
        <input type="color" name="color" value="<?= $color ?>"><br><br>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>