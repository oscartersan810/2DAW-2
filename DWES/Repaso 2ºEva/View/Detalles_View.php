<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
</head>

<body>
    <h1>Detalles de la Imagen</h1>
    <img src="../imagen/<?= $imagen ?>" alt="" width="400px">
    <h2>Usuarios que le han dado "Me gusta":</h2>
    <ul>
        <?php foreach ($usuarios as $usuario) { ?>
            <li><?= $usuario->getNombre() ?></li>
        <?php } ?>
    </ul>
    <a href="../Controller/Inicio_Controller.php">Volver</a>
</body>

</html>