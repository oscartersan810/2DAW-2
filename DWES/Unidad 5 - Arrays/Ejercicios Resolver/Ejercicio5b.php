<?php
// Verificamos si hemos recibido los datos de los aspirantes.
if (!isset($_REQUEST['aspirantes'])) {
    echo "<p>Primero debes introducir los aspirantes.</p>";
    echo "<a href='index.php'>Volver al formulario de aspirantes</a>";
    exit;
}

// Decodificamos y deserializamos los datos recibidos.
$aspirantes = unserialize(base64_decode($_REQUEST['aspirantes']));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Aspirantes</title>
    <style>
        .mayor30 {
            color: red;
        }

        .menor30{
            color: green;
        }
    </style>
</head>
<body>
    <h1>Listado de Aspirantes</h1>

    <ul>
        <?php foreach ($aspirantes as $nombre => $datos): ?>
            <li>
                <strong>Nombre:</strong> <?= $datos['Nombre'] ?><br>
                <strong class="<?= $datos['Edad'] > 30 ? 'mayor30' : 'menor30' ?>">Edad:</strong> <?= $datos['Edad'] ?><br>
                <strong>Años de experiencia:</strong> <?= $datos['Experiencia'] ?><br>
                <strong>Correo:</strong> <?= $datos['Correo'] ?><br>
                <br>
            </li>
        <?php endforeach; ?>
    </ul>

    <a href="ejercicio5.php">Volver al formulario</a>
</body>
</html>
