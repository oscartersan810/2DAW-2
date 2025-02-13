<?php 
	include_once 'Bombilla.php';

	if (isset($_REQUEST['general'])) {
		if ($_REQUEST['general']=="activar") {
			Bombilla::activarGeneral();
		} else {
			Bombilla::desactivarGeneral();
		}
	} else if (isset($_REQUEST['bombilla'])) {
		if (isset($_REQUEST['accion'])) {
			if ($_REQUEST['accion']=="encender") {
				$_SESSION['bombillas'][$_REQUEST['bombilla']]->encender();
			} else {
				$_SESSION['bombillas'][$_REQUEST['bombilla']]->apagar();
			}
		} else {
			$_SESSION['bombillas'][$_REQUEST['bombilla']]->cambiarEstado();
		}
	}
	header('Location:Prueba.php');
 ?>