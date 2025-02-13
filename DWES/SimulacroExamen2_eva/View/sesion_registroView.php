<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        h1{
            text-align: center;
        }
        form{
            text-align: center;
            margin: 0px auto;
        }
        h3{
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Inicie sesión o Registre uno nuevo</h1>
    <form action="../Controller/sesion_registro.php" method="post">
        <label for="Usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario" required><br><br>
        <input type="submit" value="Iniciar Sesion" name="iniciaSesion">
        <input type="submit" value="Registrar Usuario" name="registraUsuario">
    </form>
</body>
</html>