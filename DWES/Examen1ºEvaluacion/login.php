<?php
session_start();
if (isset($_COOKIE['usuario'])) {
    header('Location: index.php');
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Inicie sesión</h1>
    <form action="" method="post">
        <label for="Usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario"><br><br>
        <label for="Contraseña">Contraseña: </label>
        <input type="password" name="contrasenia" id="contrasenia"><br><br>
        <input type="submit" value="ACCESO USUARIO" name="acceso">
    </form><hr><br>

    <h1>Registre un nuevo usuario</h1>
    <form action="" method="post">
        <label for="Usuario">Usuario: </label>
        <input type="text" name="nuevoUsuario" id="Nuevousuario"><br><br>
        <label for="Contraseña">Contraseña: </label>
        <input type="password" name="nuevaContrasenia" id="nuevaContrasenia"><br><br>
        <input type="submit" value="REGISTRO USUARIO" name="registro">
    </form><hr><br>

    <?php
    //Inicio Sesión
    if (isset($_REQUEST['usuario']) && isset($_REQUEST['contrasenia'])) {
        $usuario = $_REQUEST['usuario'];
        $contrasenia = $_REQUEST['contrasenia'];
        
        if (isset($_REQUEST['acceso'])) {
            if (!file_exists("usuarios/$usuario.rsv")) {
                echo "<h4 style='color: red;'>No se encuentra el usuario registrado</h4>";
            } else{
                $fp = fopen("usuarios/$usuario.rsv", "r");
                $correcto = false;
                while (!feof($fp)) {
                    $linea = trim(fgets($fp));
                    $sep = explode(" ", $linea);
                    if ($sep[0] == $contrasenia) {
                        // $_SESSION['usuario'] = $usuario;
                        setcookie("usuario", $usuario, time()+ 7*24*60*60);
                        setcookie("contrasenia", $contrasenia, time()+ 7*24*60*60);
                        $correcto = true;
                        header('Refresh: 0');
                    }
                }
                fclose($fp);
            }
        }
        

        if (isset($correcto)) {
            if (!$correcto) {
                echo "<h4 style='color: red;'>Contraseña Incorrecta</h4>";
           }
        }
         
    }
    
    //Registro
    if (isset($_REQUEST['nuevoUsuario']) && isset($_REQUEST['nuevaContrasenia'])) {
        $nuevoUsuario = $_REQUEST['nuevoUsuario'];
        $nuevaContrasenia = $_REQUEST['nuevaContrasenia'];

        if (file_exists("usuarios/$nuevoUsuario.rsv")) {
            echo "<h4 style='color: red;'>Lo siento ese nombre de usuario ya está ocupado</h4>";
        } else {
            $fichero = fopen("usuarios/$nuevoUsuario.rsv", "w");
            fwrite($fichero, $nuevaContrasenia . PHP_EOL);
            fclose($fichero);

            if (isset($_REQUEST['registro'])) {
                // $_SESSION['usuario'] = $nuevoUsuario;
                setcookie("usuario", $nuevoUsuario, time()+ 7*24*60*60);
                setcookie("contrasenia", $nuevaContrasenia, time()+ 7*24*60*60);
                header('Location: index.php');
            }
        }
    }
    ?>
</body>
</html>