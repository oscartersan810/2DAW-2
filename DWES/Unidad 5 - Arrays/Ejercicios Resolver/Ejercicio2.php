<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <?php
    if (isset($_REQUEST['pedidos'])) {
        $pedidos = unserialize(base64_decode($_REQUEST['pedidos']));
        $pedido = $_REQUEST['pedido'];

        $pedidos[] = $pedido;
        print_r($pedidos);

    } else{
        $pedidos = [];
    }

    ?>

    <h1>Ejercicio 1</h1><br>
    <h2>Lista de pedidos</h2>

    <!-- Pizza -->
    <form action="" method="post">
        <label for="Pizza">Pizza</label><br>
        <input type="hidden" name="pedido[]" value="Pizza">
        <input type="checkbox" name="pedido[]" value="jamon">Jamon
        <input type="checkbox" name="pedido[]" value="atun">Atún
        <input type="checkbox" name="pedido[]" value="bacon">Bacon
        <input type="checkbox" name="pedido[]" value="pepperoni">Pepperoni
        <input type="hidden" name="pedidos" value="<?= base64_encode(serialize($pedidos))?>"><br>
        <input type="submit" value="Agregar">
    </form><hr>

    <!-- Hamburguesa -->
    <form action="" method="post">
        <label for="Hamburguesa">Hamburguesa</label><br>
        <input type="hidden" name="pedido[]" value="Hamburguesa">
        <input type="checkbox" name="pedido[]" value="lechuga">Lechuga
        <input type="checkbox" name="pedido[]" value="tomate">Tomate
        <input type="checkbox" name="pedido[]" value="queso">Queso
        <input type="hidden" name="pedidos" value="<?= base64_encode(serialize($pedidos))?>"><br>
        <input type="submit" value="Agregar">
    </form><hr>

    <!-- Perrito Caliente -->
    <form action="" method="post">
        <label for="Perrito Caliente">Perrito Caliente</label><br>
        <input type="hidden" name="pedido[]" value="Perrito Caliente">
        <input type="checkbox" name="pedido[]" value="lechuga">Lechuga
        <input type="checkbox" name="pedido[]" value="cebolla">Cebolla
        <input type="checkbox" name="pedido[]" value="patata">Patata
        <input type="hidden" name="pedidos" value="<?= base64_encode(serialize($pedidos))?>"><br>
        <input type="submit" value="Agregar">
    </form><hr>

    <form action="Ejercicio2b.php" method="post">
        <label for="Enviar Pedido">¿Listo para enviar pedido?</label>
        <input type="hidden" name="pedidos" value="<?= base64_encode(serialize($pedidos))?>"><br>
        <input type="submit" value="Enviar todo el pedido">
    </form>
</body>

</html>