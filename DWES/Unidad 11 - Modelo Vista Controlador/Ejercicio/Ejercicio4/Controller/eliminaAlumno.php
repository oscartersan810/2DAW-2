<?php
    require_once '../Model/Alumnos.php';
    $alumno = new Alumnos($_REQUEST['matricula']);
    $alumno->delete();
    header("Location: ../Controller/index.php"); 
?>