<?php
require_once '../Model/Oferta.php';

//sube la imagen al servidor
move_uploaded_file($_FILES['imagen']['tmp_name'], '../View/images/'.$_FILES['imagen']['name']);

//inserta la oferta en la base de datos
$ofertaAux = new Oferta($_REQUEST['id'], $_REQUEST['titulo'], $_FILES['imagen']['name'], $_REQUEST['descripcion']);
$ofertaAux->insert();
header("Location: ../Controller/index.php");
?>