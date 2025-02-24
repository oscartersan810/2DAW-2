<?php
session_start();
 require_once '../Model/Reserva.php';
 require_once '../Model/Usuario.php';

if (isset($_REQUEST['reservar'])) {
    $profesor = $_REQUEST['profesor'];
    $hora = $_REQUEST['hora'];
    $materia = $_REQUEST['materia'];
    $fecha = date("d/m/Y", strtotime(+1));

    $nuevaReserva = new Reserva(null, $_REQUEST['id_profesor'], $fecha, $hora, $materia);
    $nuevaReserva->insert();
    header('Location: pg_estudiante.php');
}
 include '../View/reserva_profesorView.php';
?>