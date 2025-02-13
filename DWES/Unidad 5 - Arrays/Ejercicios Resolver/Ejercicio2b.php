<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2: Pedido Completo</title>
</head>

<body>
    <h1>Pedido Completo</h1>
    <?php
    if (isset($_REQUEST['pedidos'])) {
        $pedidos = unserialize(base64_decode($_REQUEST['pedidos']));
        
        print_r($pedidos);

    ?>
        <table border="1">
            <?php
            foreach ($pedidos as $listaPedidos) {
                echo "<tr>";
                foreach ($listaPedidos as $key => $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            ?>
        </table><br>

        <?php
            foreach ($pedidos as $listaPedidos) {
                foreach ($listaPedidos as $key => $value) {
                    if ($key==0) {
                        echo "<ul>$value</ul>";
                    }
                    if ($key>=1) {
                        echo "<li>$value</li>";
                    }
                }
            }
        ?>
    <?php
    } else{
        echo "<h4>No existe ningún pedido</h4>";
    }
    ?>

    <form action="Ejercicio2.php" method="post">
        <input type="submit" value="Hacer un pedido nuevo">
    </form>

</body>

</html>