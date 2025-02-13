<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <?php
    if (!isset($_REQUEST['fila']) && !isset($_REQUEST['columna'])) {
        $fila = "";
        $columna = "";

    ?>
        <table border="1">

            <?php
            for ($fila = 1; $fila <= 10; $fila++) {
            ?>
                <tr>
                    <?php
                    for ($columna = 1; $columna <= 10; $columna++) {
                    ?>

                        <td><a href="Ejercicio5.php?fila=<?php echo($fila);?>&columna=<?php echo ($columna); ?>"><img src="ImgEj5/cerrado.jpg" alt="ojo_img" style="width: 95px;"></img></a></td>

                    <?php
                    }
                    ?>
                </tr>

            <?php
            }
        } else {
            $fila = $_REQUEST['fila'];
            $columna = $_REQUEST['columna'];
            ?>
            <table border="1">

                <?php
                for ($fila = 1; $fila <= 10; $fila++) {
                ?>
                    <tr>
                        <?php
                        for ($columna = 1; $columna <= 10; $columna++) {
                        ?>

                            <td><a href="Ejercicio5.php?fila=<?php echo ($fila); ?>&columna=<?php echo ($columna); ?>"><img src="ImgEj5/<?= ($_REQUEST['fila'] == $fila) && ($_REQUEST['columna'] == $columna) ? "abierto.jpg" : "cerrado.jpg" ?>" alt="ojo_img" style="width: 95px;"></a></td>

                        <?php
                        }
                        ?>
                    </tr>
                <?php
                }
                ?>
            </table>
        <?php

        }
        ?>



</body>

</html>