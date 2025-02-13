<?php
require_once '../Model/Alumnos.php';

$data['alumnos'] = Alumnos::getAlumnosByMatricula($_REQUEST['matricula']);


?>