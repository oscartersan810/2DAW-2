<?php
// Inicializamos el array de aspirantes si no está vacío en la solicitud.
if (isset($_REQUEST['aspirantes'])) {
    $aspirantes = unserialize(base64_decode($_REQUEST['aspirantes']));
} else {
    $aspirantes = [];
}

// Si se reciben datos del formulario, agregamos el nuevo aspirante al array.
if (isset($_REQUEST['nombre'])) {
    $aspirante = [
        'Nombre' => $_REQUEST['nombre'],
        'Edad' => $_REQUEST['edad'],
        'Experiencia' => $_REQUEST['experiencia'],
        'Correo' => $_REQUEST['correo']
    ];
    $aspirantes[$_REQUEST['nombre']] = $aspirante;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Aspirantes</title>
</head>
<body>
    <h1>Aspirantes del Trabajo "Informática"</h1>

    <form action="" method="request">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" required><br><br>

        <label for="edad">Edad: </label>
        <input type="number" name="edad" required><br><br>

        <label for="experiencia">Años de experiencia: </label>
        <input type="number" name="experiencia" required><br><br>

        <label for="correo">Correo: </label>
        <input type="email" name="correo" required><br><br>

        <input type="submit" value="Enviar Aspirante">
    </form><br><hr><br>

    <form action="ejercicio5b.php" method="request">
        <label for="finalizar">Finalizar lista de aspirantes: </label><br>
        <input type="hidden" name="aspirantes" value="<?= base64_encode(serialize($aspirantes)) ?>">
        <input type="submit" value="Finalizar">
    </form>
</body>
</html>
