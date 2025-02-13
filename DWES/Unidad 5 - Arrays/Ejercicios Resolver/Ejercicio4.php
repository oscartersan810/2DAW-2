<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <h1>Formulario de Personas</h1>

    <?php
    if (isset($_REQUEST['personas'])) {
        $personas = unserialize(base64_decode($_REQUEST['personas']));
    } else {
        $personas = [
            ['nombre' => 'Anita', 'sexo' => 'm', 'orientacion' => 'bis'],
            ['nombre' => 'Lolita', 'sexo' => 'm', 'orientacion' => 'bis'],
            ['nombre' => 'Pepito', 'sexo' => 'h', 'orientacion' => 'bis'],
            ['nombre' => 'Juanito', 'sexo' => 'h', 'orientacion' => 'bis'],
            ['nombre' => 'Roberto', 'sexo' => 'h', 'orientacion' => 'het'],
            ['nombre' => 'Antonio', 'sexo' => 'h', 'orientacion' => 'het'],
            ['nombre' => 'Manuela', 'sexo' => 'm', 'orientacion' => 'het'],
            ['nombre' => 'Isabel', 'sexo' => 'm', 'orientacion' => 'het'],
            ['nombre' => 'Jenifer', 'sexo' => 'm', 'orientacion' => 'hom'],
            ['nombre' => 'Susan', 'sexo' => 'm', 'orientacion' => 'hom'],
            ['nombre' => 'Peter', 'sexo' => 'h', 'orientacion' => 'hom'],
            ['nombre' => 'Mike', 'sexo' => 'h', 'orientacion' => 'hom']
        ];
    }

    if (isset($_REQUEST['nombre']) && isset($_REQUEST['sexo']) && isset($_REQUEST['orientacion'])) {
        $persona = [
            'nombre' => $_REQUEST['nombre'],
            'sexo' => $_REQUEST['sexo'],
            'orientacion' => $_REQUEST['orientacion']
        ];
        $personas[] = $persona;
    }
    ?>

    <h2>Agregar Persona</h2>
    <form action="" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" required><br><br>

        <label for="sexo">Sexo (h = hombre, m = mujer): </label>
        <input type="text" name="sexo" required><br><br>

        <label for="orientacion">Orientación (het = heterosexual, hom = homosexual, bis = bisexual): </label>
        <input type="text" name="orientacion" required><br><br>

        <input type="submit" value="Agregar Persona">
    </form><br>

    <form action="parejas.php" method="post">
        <input type="hidden" name="personas" value="<?= base64_encode(serialize($personas)) ?>">
        <input type="submit" value="Generar Parejas Aleatorias">
    </form>

    <h2>Personas Registradas:</h2>
    <ul>
        <?php foreach ($personas as $persona) { ?>
            <li><?= $persona['nombre'] ?> - <?= $persona['sexo'] ?> - <?= $persona['orientacion'] ?></li>
        <?php } ?>
    </ul>
</body>

</html>
