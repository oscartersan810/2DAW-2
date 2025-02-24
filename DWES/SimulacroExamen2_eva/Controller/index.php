<?php
session_start();
require_once '../Model/Foto.php';

$data['fotos'] = Foto::getFotos();
$data['publicaciones'] = Foto::getFotosByAutor();

include '../View/demo_view.php';
?>
