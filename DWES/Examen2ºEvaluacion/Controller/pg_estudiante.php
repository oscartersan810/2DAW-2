<?php
session_start();
require_once '../Model/Usuario.php';
require_once '../Model/Reserva.php';

$data['profesores'] = Usuario::getProfesores();
// $data['reservas'] = Reserva::

if (!isset($_SESSION['usuario'])) {
    header('Location: login_estudiantes.php');
} 

if (isset($_REQUEST['logout'])) {
    unset($_SESSION['usuario']);
    session_destroy();
    header('Location: login_estudiantes.php');
}
include '../View/pg_estudiante.php'; 
?>