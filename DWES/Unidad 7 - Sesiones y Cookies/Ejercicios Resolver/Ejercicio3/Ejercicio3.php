<?php
session_start();
if (!isset($_SESSION['cesta'])) {
    $_SESSION['cesta'] = [];
    setcookie("cesta", $cesta, time() + 24*60*60);
    
} else if (isset($_COOKIE['cesta'])) {
    $_SESSION['cesta'] = $_COOKIE['cesta'];
}

$productos = ["producto1" => ["nombre" => "raton", "precio" => 6, "imagen" => "img/raton.jpg"],
            "producto2" => ["nombre" => "teclado", "precio" => 11, "imagen" => "img/teclado.jpg"],
            "producto3" => ["nombre" => "monitor", "precio" => 80, "imagen" => "img/monitor.jpg"],
            "producto4" => ["nombre" => "joystick", "precio" => 33, "imagen" => "img/joystick.jpg"]
];

$totalProductos = 0;

if (isset($_REQUEST['compra'])) {
    $id = $_REQUEST['producto_id'];
    if (isset($_SESSION['cesta'][$id])) {
        $_SESSION['cesta'][$id]['unidad']++;
    } else{
        $_SESSION['cesta'][$id] = $productos[$id];
        $_SESSION['cesta'][$id]['unidad'] = 1;
    }

    //Recorrer el array de cesta y ir sumando cada producto
    
    foreach ($_SESSION['cesta'] as $producto) {
        $totalProductos += $producto['unidad'];
    }
}

if (isset($_REQUEST['eliminar'])) {
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <table border="1">
        <tr>
            <th colspan="3"><h2>La Tiendecita</h2></th>
            <th><a href="Cesta.php" style="text-decoration: none;">Cesta <?= $totalProductos ?> productos</a></th>
        </tr>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th></th>
        </tr>
        <?php
        foreach ($productos as $key => $value) {
            ?>
            <tr>
                <td><?= $value['nombre']?></td>
                <td><?= $value['precio']?></td>
                <td><img src="<?= $value['imagen']?>" alt="imagen" width="150px"></td> 
                <td><form action="" method="post">
                    <input type="hidden" value="<?= $key ?>" name="producto_id">
                    <input type="submit" value="Agregar a la cesta" name="compra">
                </form></td> 
            </tr>
            <?php 
        } 
        ?>
    </table>

    <form action="" method="post">
            <input type="submit" value="Eliminar Cesta" name="eliminar">
        </form>
</body>
</html>