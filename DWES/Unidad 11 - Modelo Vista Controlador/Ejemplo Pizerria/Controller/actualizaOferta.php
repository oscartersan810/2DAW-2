<?php
require_once '../Model/Oferta.php';
$data['oferta'] = Oferta::getOfertaById($_REQUEST['id']);
include '../View/actualizaOferta_view.php';
?>