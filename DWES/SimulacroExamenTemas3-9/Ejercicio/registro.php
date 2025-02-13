<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>REGISTRO DE UNA NUEVA CUENTA DE USUARIO</h1>
    <h3>Introduzca los datos para registrar la cuenta</h3>

    <?php
    if (isset($_REQUEST['usuario']) && isset($_REQUEST['contrasenia'])) {
        $usuario = $_REQUEST['usuario'];
        $contrasenia = $_REQUEST['contrasenia'];

        $fp = fopen("usuarios.dat", "a");
        fwrite($fp, $usuario . "," . $contrasenia . PHP_EOL);
        fclose($fp);

        if (isset($_REQUEST['aceptar'])) {
            header('Location: login.php');
        }
    } 
    ?>

    <form action="" method="post">
        <label for="usuario">USUARIO: </label>
        <input type="text" name="usuario" id="usuario" required><br><br>
        <label for="Contraseña">CONTRASEÑA: </label>
        <input type="password" name="contrasenia" id="contrasenia" required><br><br>
        <input type="submit" value="ACEPTAR" name="aceptar">
    </form>
</body>
</html>