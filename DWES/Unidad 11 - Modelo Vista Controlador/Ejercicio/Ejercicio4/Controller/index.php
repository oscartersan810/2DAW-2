<?php
require_once '../Model/Alumnos.php';
require_once '../Model/Asignaturas.php';

$data['alumnos'] = Alumnos::getAlumnos();
$data['asignaturas'] = Asignaturas::getAsignaturas();

include '../View/index_view.php';
?>