<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado tiendas</title>
</head>
<body>
    <?php
        $nombreProducto = $_REQUEST['nombre'];
        $tienda1 = $_REQUEST['precio1'];
        $tienda2 = $_REQUEST['precio2'];
        $tienda3 = $_REQUEST['precio3'];

        $precioMedio = ($tienda1+$tienda2+$tienda3) /3;


    ?>
    <h1>Lista de Precios para <?= $nombreProducto ?></h1>
    <table style="text-align: center;" border="1"cellpadding="7" cellspacing="4">
        <tr>
            <th>Producto</th>
            <th>Tienda 1</th>
            <th>Tienda 2</th>
            <th>Tienda 3</th>
        </tr>
        <tr>
            <th><?= $nombreProducto ?></th>
            <td><?= $tienda1 ?>€</td>
            <td><?= $tienda2 ?>€</td>
            <td><?= $tienda3 ?>€</td>
        </tr>
        <tr>
            <th>Precio medio</th>
            <td colspan="3" style="text-align: center;"><?= (int)$precioMedio ?>€</td>
        </tr>
        <tr>
            <th>Diferencia</th>
            <td><?= (int)$precioMedio-$tienda1 ?></td>
            <td><?= (int)$precioMedio-$tienda2 ?></td>
            <td><?= (int)$precioMedio-$tienda3 ?></td>
        </tr>
    </table>
</body>
</html>