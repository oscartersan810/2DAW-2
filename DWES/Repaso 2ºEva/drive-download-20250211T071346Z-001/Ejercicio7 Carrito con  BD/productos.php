<?php
session_start();
if (!isset($_SESSION['productos'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        <tr><th colspan=4>
            <form action="nuevoProducto.php" method="post">
                <input type="submit" value="Añadir Nuevo Producto">
            </form>
        </th></tr>
        <tr><th>Producto</th><th>Precio</th><th>Imagen</th><th></th></tr>
        <?php
foreach ($_SESSION['productos'] as $prod => $producto) {
    echo '<tr><td>' . $prod . '</td><td>' . $producto[0] . '</td><td><img style="width:100px" src="img/' . $producto[2] . '"/></td><td>';
    ?>
    <form action="borraProducto.php" method="post">
        <input type="hidden" name="prod" value="<?=$prod?>">
        <input type="submit" value="Borrar">
    </form>
    <?php
echo '</td></tr>';
}
?>
</table>
<a href="index.php">Cerrar</a>
</body>
</html>