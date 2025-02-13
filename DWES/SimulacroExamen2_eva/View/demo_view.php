<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <style>
        h2 {
            text-align: center;
        }
        a {
            text-decoration: none;
        }
        table {
            text-align: center;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
        }
        img {
            width: 200px;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    
    if (!isset($_SESSION['usuario'])) {
        echo '<a href="../Controller/sesion_registro.php"><h2>Inicio Sesión/Registro</h2></a>';
    } else {
        echo '<a href=""><h2>' . $_SESSION['usuario'] . '</h2></a>';
    }
    ?>

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
            foreach ($data['fotos'] as $foto) {
                ?>
                <tr>
                    <td><img src="../View/imagen/<?= htmlspecialchars($foto->getImagen()) ?>"></td>
                    <td><?= htmlspecialchars($foto->getAutor()) ?></td>
                    <td><?= $foto->getLikes() ?></td>
                </tr>
                <?php 
            } 
            ?>
        </tbody>
    </table>
</body>
</html>
