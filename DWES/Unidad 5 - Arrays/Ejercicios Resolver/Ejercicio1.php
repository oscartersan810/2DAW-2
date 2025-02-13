<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <h1>Ejercicio 1</h1>
    <?php
    if (!isset($_REQUEST['estado'])) {
        $estado = array_fill(0, 100, 0); 
    } else {
        $estado = explode(',', $_REQUEST['estado']);
    }

    if (isset($_REQUEST['fila']) && isset($_REQUEST['columna'])) {
        $fila = $_REQUEST['fila'];
        $columna = $_REQUEST['columna'];
        $index = ($fila - 1) * 10 + ($columna - 1);
        $estado[$index] = $estado[$index] == 1 ? 0 : 1;
    }

    $estadoCadena = implode(',', $estado);
    ?>

    <table border="1">
        <?php
        for ($fila = 1; $fila <= 10; $fila++) {
            echo "<tr>";
            for ($columna = 1; $columna <= 10; $columna++) {
                $index = ($fila - 1) * 10 + ($columna - 1); 
                $imagen = $estado[$index] == 1 ? "abierto.jpg" : "cerrado.jpg";
                $url = "Ejercicio1.php?fila=$fila&columna=$columna&estado=$estadoCadena";
                echo "<td><a href='$url'><img src='ImgEj1/$imagen' alt='ojo_img' style='width: 95px;'></a></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
