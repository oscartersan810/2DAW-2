<?php
session_start();
if (isset($_SESSION['paleta'])) {
    print_r($_SESSION['paleta']);
} else{
    echo "no existe la sesion de paleta";
}

if (isset($_REQUEST['destruirPaleta'])) {
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paletas Generada</title>
</head>
<body>
    <form action="Ejercicio1.php" method="post">
        <input type="submit" value="Eliminar colores" name="destruirPaleta">
    </form>
</body>
</html>