<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotos</title>
    <style>
        * {
            text-align: center;
        }
    </style>
</head>

<body>
    <table border="solid 2px">
        <tr>
            <td>
                <?php
                if (!isset($_SESSION["user"])) {
                    ?>
            <tr>
                <td>
                    <a href="../Controller/IniciarSesion_Registro_Controller.php">Iniciar Sesion/Registrarse</a>
                </td>
            </tr>
            <?php
                } else {
                    ?>
            <tr>
                <td colspan="4">

                <a href="../Controller/IniciarSesion_Registro_Controller.php"><h1><?= $_SESSION["user"] ?></h1></a>
                </td>
            </tr>
            <?php
                }
                ?>
        </td>
        </tr>

        <tr>
            <td>Imagen</td>
            <td>Autor</td>
            <td>Likes</td>
            <td>Votar</td>
        </tr>
        <?php foreach ($fotos as $foto) {
            $usuario = $usuario_array[$foto->getId_usuario()];
            ?>
            <tr>
                <td>
                <form action="../Controller/Detalles_Controller.php" method="request">
                            <input type="hidden" name="usuario" value="<?= $usuario ? $usuario->getNombre() : 'Desconocido' ?>">
                            <input type="hidden" name="imagen" value="<?= $foto->getImagen() ?>">
                            <button type="submit">
                                <img src="../imagen/<?= $foto->getImagen() ?>" alt="" width="200px">
                            </button>
                        </form>
                </td>
                <td><?= $usuario->getNombre() ?></td>
                <td><?= isset($likes[$foto->getId()]) ? count($likes[$foto->getId()]) : 0 ?></td>
                <td>
                    <?php if (isset($_SESSION["user_id"])) { ?>
                        <form action="" method="request">
                            <input type="hidden" name="id_usuario"value="<?= isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : [] ?>">
                            <input type="hidden" name="id_foto" value="<?= $foto->getId() ?>">
                            <input type="submit" value="Me gusta">
                        </form>
                        <?php
                    }
                    ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html>