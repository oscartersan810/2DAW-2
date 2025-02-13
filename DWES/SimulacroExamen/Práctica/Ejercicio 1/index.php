<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_COOKIE['usuario'])) {
    header('Location: login.php');
    exit;
}

$usuario = $_COOKIE['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido, <?php $_COOKIE['usuario'] ?>!</h1>
    <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>
