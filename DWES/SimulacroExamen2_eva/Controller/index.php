<?php
require_once '../Model/Usuario.php';
require_once '../Model/Foto.php';
require_once '../Model/Like.php';

$data['usuarios'] = Usuario::getUsuarios();
$data['fotos'] = Foto::getFotos();

include '../View/demo_view.php';
?>