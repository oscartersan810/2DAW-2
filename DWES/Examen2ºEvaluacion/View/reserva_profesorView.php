<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Profesor</title>
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
    <?php 
    ?>
    <h1>RESERVA CON <?=$_REQUEST['profesor']?></h1>
    <table border="1">
        <tr>
            <th>HORA</th>
            <th>MATERIA</th>
            <th>RESERVA</th>
        </tr>
        <?php
        $hora = "";
        for($i=10; $i<=19; $i++) {
            $hora = "$i:00";
            ?>
            <tr>
                <td><?="$hora h"?></td>
                <td><form action="" method="post">
                    <input type="text" name="materia" id="materia">
                </form></td>
                <td><form action="../Controller/reserva_profesor.php" method="post">
                    <input type="hidden" name="hora" value="<?="$hora"?>">
                    <input type="submit" value="RESERVAR" name="reservar">
                </form></td>
            </tr>
            <?php 
        } 
        ?>
    </table><br><br>
    <form action="../Controller/pg_estudiante.php" method="post">
        <input type="submit" value="VOLVER SIN RESERVAR">
    </form>
</body>
</html>