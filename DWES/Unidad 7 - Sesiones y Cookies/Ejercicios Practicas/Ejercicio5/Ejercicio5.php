<?php
session_start();

// Inicializar carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Productos disponibles
$productos = [
    "pluma1" => ["imagen" => "pluma1.jpg", "nombre" => "Kaweko Classic Sport Naranja", "precio" => 49.00],
    "pluma2" => ["imagen" => "pluma2.jpg", "nombre" => "Sailor PG Slim Iris Nebula", "precio" => 225.00],
    "pluma3" => ["imagen" => "pluma3.jpg", "nombre" => "Kaweco Art Sport Terrazo", "precio" => 112.00],
    "pluma4" => ["imagen" => "pluma4.jpg", "nombre" => "Kaweco Art Sport Mineral Blanco", "precio" => 115.00]
];

// Agregar al carrito
if (isset($_POST['comprar'])) {
    $producto_id = $_POST['producto_id'];
    if (isset($_SESSION['carrito'][$producto_id])) {
        $_SESSION['carrito'][$producto_id]['cantidad']++;
    } else {
        $_SESSION['carrito'][$producto_id] = $productos[$producto_id];
        $_SESSION['carrito'][$producto_id]['cantidad'] = 1;
    }
}

// Eliminar del carrito
if (isset($_POST['eliminar'])) {
    $producto_id = $_POST['producto_id'];
    unset($_SESSION['carrito'][$producto_id]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <style>
        h2 {
            text-align: center;
            background-color: steelblue;
            padding: 15px;
        }
        body {
            background-color: skyblue;
        }
        .producto, .carrito {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h2>Tienda on-line <i>La Estilografía</i></h2>

    <h4>Productos</h4>
    <hr>
    <?php foreach ($productos as $key => $producto) { ?>
        <div class="producto">
            <img src="<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>" width="300">
            <p>Nombre: <?= $producto['nombre'] ?></p>
            <p>Precio: <?= $producto['precio'] ?>€</p>
            <form method="post">
                <input type="hidden" name="producto_id" value="<?= $key ?>">
                <input type="submit" name="comprar" value="Comprar">
            </form>
        </div>
    <?php } ?>

    <h4>Carrito de Compras</h4>
    <hr>
    <?php if (isset($_SESSION['carrito']) && $_SESSION['carrito']) { ?>
        <?php foreach ($_SESSION['carrito'] as $key => $item) { ?>
            <div class="carrito">
                <img src="<?= $item['imagen'] ?>" alt="<?= $item['nombre'] ?>" width="300">
                <p>Nombre: <?= $item['nombre'] ?></p>
                <p>Precio: <?= $item['precio'] ?>€</p>
                <p>Cantidad: <?= $item['cantidad'] ?></p>
                <form method="post">
                    <input type="hidden" name="producto_id" value="<?= $key ?>">
                    <input type="submit" name="eliminar" value="Eliminar">
                </form>
            </div>
        <?php } ?>
    <?php } else { ?>
        <p>El carrito está vacío.</p>
    <?php } ?>
</body>
</html>
