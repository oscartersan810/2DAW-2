<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <style>
        h2{
            text-align: center;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <a href=""><h2>Inicio Sesión/Registro</h2></a>
    <table>
        <thead>
            <tr>
                <th>IMAGEN</th>
                <th>AUTOR</th>
                <th>LIKES</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($data['fotos'] as $foto){
                ?>
                <tr>
                    <td><?= $foto->get?></td>
                </tr>
                <?php 
            } 
            ?>
        </tbody>
    </table>
</body>
</html>