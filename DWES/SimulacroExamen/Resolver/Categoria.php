<?php
session_start(); 
if (isset($_REQUEST['volver'])) {
    header('Location: Concesionario.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
</head>
<body>
    <table border="1">
    <tr>
            <th>MATRÍCULA</th>
            <th>FECHA</th>
            <th>MARCA</th>
            <th>TIPO</th>
            <th>EXTRAS</th>
    </tr>
    <?php
    if (isset($_SESSION['almacen']) && $_SESSION['almacen']) {
        foreach ($_SESSION['almacen'] as $key => $value) {
            if ($value['Tipo'] == $_SESSION['busquedaTipo']) {
                ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value['Fecha'] ?></td>
                    <td><?= $value['Marca'] ?></td>
                    <td><?= $value['Tipo'] ?></td>
                    <td><?= $value['Extras'] ?></td>
                </tr>
                <?php 
            }
            ?>
            <?php 
        }
    }
     ?>
    </table>
    <br><br>
    <form action="" method="post">
        <input type="submit" value="VOLVER" name="volver">
    </form>
</body>
</html>