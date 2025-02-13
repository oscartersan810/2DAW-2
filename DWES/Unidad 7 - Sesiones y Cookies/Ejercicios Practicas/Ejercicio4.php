<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    // header('Location: Ejercicio4.php');
} 

if (isset($_REQUEST['usuario']) && isset($_REQUEST['contrasenia'])) {
    $_SESSION['usuario'] = $_REQUEST['usuario'];
    $_SESSION['contrasenia'] = $_REQUEST['contrasenia'];
    header('Location: Ejercicio1b.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    <h1>Iniciar Sesion</h1>
    <form action="Ejercicio1b.php" method="post">
        <label for="Usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario" required><br><br>
        <label for="Contrasenia">Contraseña: </label>
        <input type="password" name="contrasenia" id="contrasenia" required><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>