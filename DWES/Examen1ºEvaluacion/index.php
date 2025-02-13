<?php
include_once 'Reserva.php'; //Aqui no ponemos la session ya que se ha inicializado en la Clase 
include_once 'librerias.php';

if (!isset($_COOKIE['usuario'])) {
    header('Location: login.php');
}

$usuario = $_COOKIE['usuario'];

if (!isset($_SESSION['reservas'][$usuario])) {
    $_SESSION['reservas'][$usuario] = [];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Reservas</title>
</head>
<body>
    <h1>BIENVENID@ <?= $usuario ?></h1>
    <?php
    if (isset($_REQUEST['reserva'])) {
        $sala = $_REQUEST['sala'];
        $fechaHora = $_REQUEST['fechaHora'];

        $reserva = new Reserva($usuario, $fechaHora, $sala);

        $_SESSION['reservas'][$usuario][] = serialize($reserva);

        // anadirFichero("usuarios/$usuario.rsv");

        echo "<h3>RESERVAS PENDIENTE POR CONFIRMAR:".Reserva::getTotalPendientes()." </h3>";
    } else{
        echo "<h3>RESERVAS PENDIENTE POR CONFIRMAR: 0</h3>";
    }

    if (isset($_REQUEST['logout'])) {
        // unset($_SESSION['usuario']);
        setcookie("usuario", "", -1);
        header('Location: login.php');
    } 
    ?><br>
    <form action="" method="post">
        <label for="Sala">Sala que quiere reservar: </label>
        <input type="text" name="sala" id="sala" required><br><br>
        <label for="Fecha y hora">Fecha y hora de la reserva: </label>
        <input type="datetime-local" name="fechaHora" id="fecha" required><br><br>
        <input type="submit" value="RESERVAR" name="reserva">
    </form><br><hr><br>
    
    <form action="" method="post" style="border: 1px solid black; padding: 15px;">
        <input type="radio" name="estado" id="estado" value="TODOS">
        <label for="TODOS">TODOS</label>
        <input type="radio" name="estado" id="estado" value="PENDIENTES">
        <label for="PENDIENTES">PENDIENTES</label>
        <input type="radio" name="estado" id="estado" value="CONFIRMADAS">
        <label for="CONFIRMADAS">CONFIRMADAS</label>
        <input type="radio" name="estado" id="estado" value="ANULADAS">
        <label for="TODOS">ANULADAS</label>
        <input type="submit" value="FILTRAR" name="filtrar">
    </form><br><br>

    <table border="1">
        <tr>
            <th colspan="4">LISTADO DE RESERVAS</th>
        </tr>
        <tr>
            <th>SALA</th>
            <th>FECHA</th>
            <th>HORA</th>
            <th>ESTADO</th>
        </tr>
        <?php
        if (isset($_SESSION['reservas'][$usuario])) {
            foreach ($_SESSION['reservas'][$usuario] as $key => $value) {
                $reserva = unserialize($value);

                ?>
                <tr>
                    <td><?= $reserva->getSala()?></td>
                    <td><?= $reserva->getFecha()?></td>
                    <td><?= $reserva->getHora()?></td>
                    <td><?= $reserva->getEstado()?></td>
                    <td>
                        <form action="" method="post">
                            <input type="submit" value="CONFIRMAR" name="confirmar">
                            <input type="submit" value="ANULAR" name="anular">
                        </form>
                        <?php
                            if (isset($_REQUEST['confirmar'])) {
                                $reserva->confirmar();
                            }

                            if (isset($_REQUEST['anular'])) {
                                $reserva->anular();
                            }
                        ?>
                    </td>
                </tr>
                <?php 
            }
        } 
        ?>
    </table><br><br>
    <form action="" method="post">
        <input type="submit" value="CERRAR SESIÓN" name="logout">
    </form>
</body>
</html>