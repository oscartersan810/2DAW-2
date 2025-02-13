<?php
 try { 
    $conexion = new PDO("mysql:host=localhost;dbname=gestisimal;charset=utf8", "root", ""); 
} catch (PDOException $e) { 
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>"; 
    die ("Error: ". $e->getMessage()); 
} 

$consulta = $conexion->query("SELECT * FROM articulos");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestisimal</title>
</head>
<body>
    <h1 style="text-align: center;">GESTISIMAL</h1>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Descripción</th>
            <th>Precio de compra</th>
            <th>Precio de venta</th>
            <th>Margen</th>
            <th>Stock</th>
        </tr>
        <?php
        while ($articulos = $consulta->fetchObject()) {
            ?>
            <tr>
                <td><?= $articulos->codigo ?></td>
                <td><?= $articulos->descripcion ?></td>
                <td><?= $articulos->precio_compra ?></td>
                <td><?= $articulos->precio_venta ?></td>
                <td><?= $articulos->margen ?></td>
                <td><?= $articulos->stock ?></td>
                <td><form action="eliminaProducto.php" method="post">
                    <input type="hidden" name="codigo" value="<?= $articulos->codigo ?>">
                    <input type="submit" value="Eliminar" name="eliminar">
                </form></td>
                <td><form action="modificaProducto.php" method="post">
                    <input type="hidden" name="codigo" value="<?= $articulos->codigo ?>">
                    <input type="submit" value="Modificar" name="modificar">
                </form></td>
            </tr>
        <?php
        } 
        ?>
        </table><br><br>
        <table border="1">
            <tr>
                <th>Código</th>
                <th>Descripción</th>
                <th>Precio de la compra</th>
                <th>Precio de venta</th>
                <th>Stock</th>
                <th></th>
            </tr>
            <tr>
                <form action="nuevoArticulo.php" method="post">
                    <td><input type="text" name="codigo" id="codigo" required></td>
                    <td><input type="text" name="descripcion" id="descripcion" required></td>
                    <td><input type="decimal" name="precio_compra" id="precio_compra" required></td>
                    <td><input type="decimal" name="precio_venta" id="precio_venta" required></td>
                    <td><input type="number" name="stock" id="stock" required></td>
                    <td><input type="submit" name="nuevoArticulo" value="Nuevo Artículo"></td>
                </form>
            </tr>
    </table>
</body>
</html>