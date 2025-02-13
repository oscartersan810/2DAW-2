<?php
// Tiempo de expiración de la cookie (1 semana)
$tiempoExpiracion = time() + (7 * 24 * 60 * 60);

// Si el formulario es enviado
if (isset($_POST['guardar'])) {
    // Crear un array asociativo con las preferencias del usuario
    $preferencias = [
        "nombre" => $_POST['nombre'],
        "tema" => $_POST['tema'],
        "idioma" => $_POST['idioma']
    ];

    // Serializar el array y guardarlo en una cookie
    setcookie("preferencias_usuario", serialize($preferencias), $tiempoExpiracion);
    $mensaje = "¡Preferencias guardadas!";
}

// Recuperar las preferencias si la cookie existe
$preferenciasGuardadas = null;
if (isset($_COOKIE['preferencias_usuario'])) {
    // Deserializar el contenido de la cookie
    $preferenciasGuardadas = unserialize($_COOKIE['preferencias_usuario']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias de Usuario</title>
</head>
<body>
    <h1>Gestión de Preferencias</h1>

    <?php
    // Mostrar mensaje si hay uno
    if (isset($mensaje)) {
        echo "<p style='color: green;'>$mensaje</p>";
        header("Refresh: 0");
    }

    // Mostrar preferencias guardadas, si existen
    if ($preferenciasGuardadas) {
        echo "<h3>Preferencias guardadas:</h3>";
        echo "<p><strong>Nombre:</strong> " . htmlspecialchars($preferenciasGuardadas['nombre']) . "</p>";
        echo "<p><strong>Tema:</strong> " . htmlspecialchars($preferenciasGuardadas['tema']) . "</p>";
        echo "<p><strong>Idioma:</strong> " . htmlspecialchars($preferenciasGuardadas['idioma']) . "</p>";
    } else {
        echo "<p>No hay preferencias guardadas aún.</p>";
    }
    ?>

    <h3>Establecer nuevas preferencias</h3>
    <form method="post" action="">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="tema">Tema:</label><br>
        <select name="tema" id="tema">
            <option value="Claro">Claro</option>
            <option value="Oscuro">Oscuro</option>
        </select><br><br>

        <label for="idioma">Idioma:</label><br>
        <select name="idioma" id="idioma">
            <option value="Español">Español</option>
            <option value="Inglés">Inglés</option>
            <option value="Francés">Francés</option>
        </select><br><br>

        <button type="submit" name="guardar">Guardar Preferencias</button>
    </form>
</body>
</html>
