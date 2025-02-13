<?php
session_start(); 
include_once "Nota.php";
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}

$usuario = $_SESSION['usuario'];

if (!isset($_SESSION['notas'][$usuario])) {
    $_SESSION['notas'][$usuario] = [];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de usuario</title>
</head>
<body>
    <h1>Panel de notas del usuario <?= $_SESSION['usuario']; ?></h1>

    <?php

    if (isset($_REQUEST['crear'])) {
        $titulo = $_REQUEST['titulo'];
        $texto = $_REQUEST['texto'];

        $nota = new Nota($titulo, $texto);
        
        $_SESSION['notas'][$usuario][] = serialize($nota);
        echo "<h4>Última nota creada: ".Nota::getUltima(). " </h4>";
        echo "<h4>Fecha: ".Nota::getFecha(). " </h4>";
    }
    ?>
        <table border="1">
            <tr>
                <th>Titulo</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th></th>
            </tr>
        
        <?php

        foreach ($_SESSION['notas'][$usuario] as $key => $value) {
            $nota = unserialize($value);
            $fechaYhora = explode(" ", $nota->getCreacion());
            $fecha = $fechaYhora[0];
            $hora = $fechaYhora[1];

            $notaSeleccionada = isset($_REQUEST['nota']) && $_REQUEST['nota'] == $key;
            ?>
            <tr>
                <td><a href="#vernota<?= $key ?>"><?=$nota->getTitulo()?></a></td>
                <td><?= $fecha ?></td>
                <td><?= $hora ?></td>
                <td>
                    <?php
                    if ($notaSeleccionada) {
                        echo "<h4>". $nota->getTitulo(). "</h4>";
                        echo "<p>". $nota->getTexto(). "</p>";
                    }
                    ?>
                </td>
            </tr>
        <?php 
        }
        ?>
    </table>
    <h4>Añadir nueva nota</h4>
    <form action="" method="post">
        <label for="Titulo">TITULO: </label>
        <input type="text" name="titulo" id="titulo"><br><br>
        <label for="Texto">TEXTO: </label>
        <textarea name="texto" id="texto"></textarea><br><br>
        <input type="submit" value="AÑADIR" name="crear"><br><br>
        <input type="submit" value="CERRAR SESSION" name="cerrar">
    </form>
    <?php
    if (isset($_REQUEST['cerrar'])) {
        unset($_SESSION['usuario']);
        header('Location: login.php');
    } 
    ?>
</body>
</html>