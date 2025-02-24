<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>RESERVA LA CLASE CON TU PROFESOR</h1>
    <h3>IDENTIFIQUESE (solo estudiantes)</h3>

    <form action="../Controller/login_estudiantes.php" method="post">
        <label for="Usuario">USUARIO: </label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        <label for="Clave">CONTRASEÑA: </label>
        <input type="password" name="clave" id="clave" required><br><br>
        <input type="submit" value="Aceptar">
    </form>

    <?php
    if (isset($_REQUEST['nombre'])) {
        foreach ($data['usuarios'] as $usuario) {
            if ($nombre!=$usuario->getNombre() && $clave!=$usuario->getClave() && $usuario->getPerfil()!="estudiante") {
                echo "<h3>No existe ningun usuario con esas credenciales</h3>";
                break;
            }
        } 
    }
    ?>
</body>
</html>