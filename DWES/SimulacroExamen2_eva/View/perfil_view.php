<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil usuario</title>
</head>
<body>
    <?php
    if (!isset($_SESSION['usuario'])) {
        header('Location: ../Controller/index.php');
    } else {
        echo "<h1>Perfil de usuario ".$_SESSION['usuario']."</h1>";
    }
    ?>
    <form action="" method="post">
        <input type="submit" value="Cerrar Sesión" name="cerrar">
        <input type="submit" value="Página Principal" name="principal">
    </form><br><br>
    <form action="../Controller/anadeFoto.php" enctype="multipart/form-data" method="post" style="border: 1px solid black; text-align: center;">
        <h4>Subir una Imagen</h4>
        <input type="file" name="imagen" id="imagen"><br><br>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>