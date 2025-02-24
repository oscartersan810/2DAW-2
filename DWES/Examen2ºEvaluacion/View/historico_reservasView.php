<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historico Reservas</title>
    <style>
        body{
            text-align: center;
        }
        table{
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h1>HISTORICO DE RESERVAS <?=$_SESSION['usuario']?></h1>
    <table border="1">
        <tr>
            <th>PROFESOR</th>
            <th>FECHA</th>
            <th>HORA</th>
            <th>MATERIA</th>
        </tr>
        <?php
        foreach ($data['reservasEstudiante'] as $reservaE) {
            ?>
            <tr>
                <td><?= $reservaE->getProfesor()?></td>
                <td><?= $reservaE->getFecha()?></td>
                <td><?= $reservaE->getHora()?></td>
                <td><?= $reservaE->getMateria()?></td>
            </tr>
            <?php 
        } 
        ?>
    </table>
</body>
</html>