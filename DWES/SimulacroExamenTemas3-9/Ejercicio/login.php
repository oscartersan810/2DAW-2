<?php
 session_start();
 if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
 }

 if (isset($_COOKIE['usuario'])) {
    $usuarioGuardado = $_COOKIE['usuario'];
 } else{
    $usuarioGuardado = "";
 }

 if (isset($_COOKIE['contrasenia'])) {
    $contraseniaGuardada = $_COOKIE['contrasenia'];
 } else{
    $contraseniaGuardada = "";
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
    <h1>MASQUENOTAS</h1>
    <h3>Tus notas siempre accesibles en cualquier lugar</h3><hr><br>
    <h3>Inicie sesión para acceder a su panel de notas</h3>
    
    <?php 
    if (isset($_REQUEST['usuario']) && isset($_REQUEST['contrasenia'])) {
        $usuario = $_REQUEST['usuario'];
        $contrasenia = $_REQUEST['contrasenia'];

        if (file_exists("usuarios.dat")) {
            $fp = fopen("usuarios.dat", "r");
            $existe = false;

            while (!feof($fp)) {
                $linea = trim(fgets($fp));
                if (!empty($linea)) {
                    $datos = explode(",", $linea);
                    if (isset($datos[0]) && isset($datos[1])) {
                        if ($datos[0] == $usuario && $datos[1] == $contrasenia) {
                            $_SESSION['usuario'] = $usuario;
                            $existe = true;
                            header('Refresh: 0');
                        }

                        if (isset($_REQUEST['recordar'])) {
                            setcookie("usuario", $usuario, time() + 30* 24 * 60* 60);
                            setcookie("contrasenia", $contrasenia, time() + 30* 24 * 60* 60);
                        } else{
                            setcookie("usuario", "", -1);
                            setcookie("contrasenia", "", -1);
                        }
                    }
                }
            }
            fclose($fp);

            if (!$existe) {
                echo "<p style='color: red; '>¡Usuario y contraseña incorrectos!</p>";
            }
        } else{
            echo "<p style='color: red; '>No hay ningún usuario registrado</p>";
        }
    }

    if (isset($_REQUEST['registrar'])) {
        header('Location: registro.php');
    }
    ?>

    <form action="" method="post">
        <label for="Usuario">USUARIO: </label>
        <input type="text" name="usuario" id="usuario" value="<?= $usuarioGuardado ?>"><br><br>
        <label for="contraseña">CONTRASEÑA: </label>
        <input type="password" name="contrasenia" id="contrasenia" value="<?= $contraseniaGuardada ?>"><br><br>
        <label for="RC">Recordar Contraseña: </label>
        <input type="checkbox" name="recordar" id="recordar"><br><br>
        <input type="submit" value="ACEPTAR">
    </form><br><br><hr>
    <h3>¿Todavía no tienes cuenta? Regístrate</h3>
    <form action="" method="post">
        <input type="submit" value="REGISTRAR" name="registrar">
    </form>
</body>
</html>