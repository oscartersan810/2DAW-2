<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina del Estudiante</title>
    <style>
        body{
            text-align: center;
        }
        table{
            margin: 0px auto;
        }
    </style>
</head>
<body>
    <h1>Bienvenido <?=$_SESSION['usuario']?></h1>
    <br>
    <form action="" method="post">
        <input type="submit" value="CERRAR SESIÓN" name="logout">
    </form><br><br>
    <table border="1">
        <tr>
            <th>PROFESOR</th>
            <th>ACCION</th>
            <th>RESERVA</th>
        </tr>
        <?php
        foreach ($data['profesores'] as $profesor) {
            ?>
            <tr>
                <td><?= $profesor->getNombre() ?></td>
                <td><form action="../Controller/reserva_profesor.php" method="post">
                    <input type="hidden" name="id_profesor" value="<?= $profesor->getId()?>">
                    <input type="hidden" name="profesor" value="<?= $profesor->getNombre()?>">
                    <input type="submit" value="SOLICITAR RESERVA">
                </form></td>
                <td>N/A</td>
            </tr>
            <?php 
        } 
        ?>
    </table><br><br>
    <form action="../Controller/historico_reservas.php" method="post">
        <input type="submit" value="HISTORICO DE RESERVAS">
    </form>
</body>
</html>