<?php
include_once "Factura.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime Factura</title>
</head>
    <h1>Factura</h1>
    <?php
        if (isset($_REQUEST['nombre'])) {
            $nombre = $_REQUEST['nombre'];
            $precio = $_REQUEST['precio'];
            $cantidad = $_REQUEST['cantidad'];

            $factura = new Factura();

            if (isset($_REQUEST['Anadir'])) {
                $factura->AnadeProducto($nombre, $precio, $cantidad);
            }
        }
    ?>
    <form action="" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre"><br><br>
        <label for="precio">Precio: </label>
        <input type="number" name="precio" id="precio"><br><br>
        <label for="nombre">Cantidad: </label>
        <input type="number" name="cantidad" id="cantidad"><br><br>
        <input type="submit" value="Añadir Producto" name ="Anadir">
        <input type="submit" value="Eliminar Productos Almacenados" name="eliminar">
        <input type="submit" value="Ver Total Factura" name="verFactura">
    </form><br><br>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>

    <?php
    if (isset($_SESSION['productos']) && $_SESSION['productos']) {
        foreach ($_SESSION['productos'] as $producto) {
            ?>
                <tr>
                    <td><?= $producto['Nombre'] ?></td>
                    <td><?= $producto['Precio'] ?></td>
                    <td><?= $producto['Cantidad'] ?></td>
                </tr>
            <?php 
        }
    } 
    ?>
    </table>
    
    <?php
    
    if (isset($_REQUEST['eliminar'])) {
        $_SESSION['productos'] = [];
        header('Refresh: 0');
    }

    if (isset($_REQUEST['verFactura'])) {
        $factura->imprimeFactura();
    }
    ?>
</>
</html>