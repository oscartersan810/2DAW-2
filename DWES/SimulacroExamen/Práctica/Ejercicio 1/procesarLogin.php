<?php
session_start();

// Cargar usuarios registrados desde la sesión
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
?>
