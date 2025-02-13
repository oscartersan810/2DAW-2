<?php
session_start();

// Verificar si el usuario ya está logueado mediante una cookie
if (isset($_COOKIE['usuario'])) {
    header('Location: index.php');
    exit;
}

// Cargar usuarios registrados desde la sesión (si existe)
// $usuariosRegistrados = isset($_SESSION['usuariosRegistrados']) ? $_SESSION['usuariosRegistrados'] : [];
if (isset($_SESSION['usuariosRegistrados'])) {
    $_SESSION['usuariosRegistrados'];
} else{
    $_SESSION['usuariosRegistrados'] = [];
}

// Solo para depuración (puedes eliminar esto después)
print_r($usuariosRegistrados);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
</head>
<body>
    <h1>Crear tu cuenta</h1>
    <form action="procesarLogin.php" method="post">
        <label for="Usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario" required><br><br>
        <label for="Contraseña">Contraseña: </label>
        <input type="password" name="contrasenia" id="contrasenia" required><br><br>
        <input type="submit" value="Iniciar Sesion">
    </form>
    <hr>
    <form action="crearCuenta.php" method="post">
        <label for="crearCuenta">¿Deseas Registrarte?: </label>
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
