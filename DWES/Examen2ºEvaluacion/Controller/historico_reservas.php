<?php
session_start();
require_once '../Model/Reserva.php';
require_once '../Model/Usuario.php';

$nombreEstudiante = Usuario::getUsuarioByNombre($_SESSION['usuario']);

$data['reservasEstudiante'] = Reserva::getReservasByEstudiante(1);

include '../View/historico_reservasView.php';
 ?>