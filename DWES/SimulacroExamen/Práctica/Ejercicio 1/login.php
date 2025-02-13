<?php
session_start();
if (isset($_COOKIE['usuario'])) {
    header('Location: index.php');
}

$usuariosRegistrados = isset($_SESSION['usuariosRegistrados']) ? $_SESSION['usuariosRegistrados'] : [];

// Verificar si se enviaron las credenciales
if (isset($_POST['usuario']) && isset($_POST['contrasenia'])) {
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    // Validar usuario y contraseña
    $valido = false;
    foreach ($usuariosRegistrados as $value) {
        if ($value['usuario'] == $usuario && $value['contraseña'] == $contrasenia) {
            $valido = true;
            break;
        }
    }

    if ($valido) {
        setcookie('usuario', $usuario, time() + 3600); // Crear cookie válida por 1 hora
        header('Location: index.php');
    } else {
        echo "<p>Usuario o contraseña incorrectos. <a href='login.php'>Intenta de nuevo</a></p>";
    }
} else {
    echo "<p>Por favor completa todos los campos. <a href='login.php'>Volver</a></p>";
}

print_r($usuariosRegistrados);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Inicia Sesión</h1>
    <form action="index.php" method="post">
        <label for="Usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario"><br><br>
        <label for="Contraseña">Contraseña: </label>
        <input type="password" name="contrasenia" id="contrasenia">
        <input type="submit" value="Iniciar Sesion">
    </form>
    <hr>
    <form action="crearCuenta.php" method="post">
        <label for="crearCuenta">¿Deseas Registrarte?: </label>
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>