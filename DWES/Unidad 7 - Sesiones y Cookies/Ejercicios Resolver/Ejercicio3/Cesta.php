<?php
session_start();

if (isset($_REQUEST['volver'])) {
    header('Location: Ejercicio3.php');
}

if (isset($_REQUEST['eliminar'])) {
    $id = $_REQUEST['producto_id'];
    if (isset($_SESSION['cesta'][$id])) {
        $_SESSION['cesta'][$id]['unidad']--;

        // Si la cantidad es 0 o menor, eliminar el producto de la cesta
        if ($_SESSION['cesta'][$id]['unidad'] <= 0) {
            unset($_SESSION['cesta'][$id]);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cesta</title>
</head>
<body>
    <table border="1">
        <tr>
            <th colspan="5">PRODUCTOS EN LA CESTA</th>
        </tr>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Unidades</th>
            <th></th>
        </tr>
        <?php
        if (isset($_SESSION['cesta']) && $_SESSION['cesta']) {
            foreach ($_SESSION['cesta'] as $key => $value) {
                $nombre = isset($value['nombre']) ? $value['nombre'] : 'Sin nombre';
                $precio = isset($value['precio']) ? $value['precio'] : 'Sin precio';
                $imagen = isset($value['imagen']) ? $value['imagen'] : 'img/blanco.jpg'; 
                $unidades = isset($value['unidad']) ? $value['unidad'] : 0;
                ?>
                <tr>
                    <td><?= $nombre ?></td>
                    <td><?= $precio ?></td>
                    <td><img src="<?= $imagen ?>" alt="imagen" width="150px"></td>
                    <td><?= $unidades?></td>
                    <td><form action="" method="post">
                    <input type="hidden" value="<?= $key ?>" name="producto_id">
                        <input type="submit" value="Eliminar producto" name="eliminar">
                </form></td>
                </tr>
                <?php 
            }
        }
        ?>
        <tr>
            <td><form action="" method="post">
                <input type="submit" value="Volver a la Tienda" name="volver">
            </form></td>
        </tr>
    </table>
</body>
</html>