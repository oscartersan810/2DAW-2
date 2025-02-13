<?php
    require_once '../Model/Alumnos.php';

    $alumno = new Alumnos($_REQUEST['matricula'], $_REQUEST['nombre'], $_REQUEST['apellidos'], $_REQUEST['curso']);
    $alumno->insert();

    header("Location: ../Controller/index.php");
?>