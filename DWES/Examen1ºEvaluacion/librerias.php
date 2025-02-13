<?php
include_once "Reserva.php";
function actualizarFichero($fichero){
    $fp = fopen($fichero, "w");
    fwrite($fp, $_COOKIE['contrasenia'].PHP_EOL);

    if (isset($_SESSION['reservas'][$_COOKIE['usuario']])) {
        foreach ($_SESSION['reservas'][$_COOKIE['usuario']] as $key => $value) {
            $reserva = serialize($value);
            fwrite($fp, $reserva .PHP_EOL);
        }
    }
    fclose($fp);
} 

function anadirFichero($fichero){
    $fp = fopen($fichero, "a");
    
    if (isset($_SESSION['reservas'][$_COOKIE['usuario']])) {
        foreach ($_SESSION['reservas'][$_COOKIE['usuario']] as $key => $value) {
            $reserva = serialize($value);
            fwrite($fp, $reserva .PHP_EOL);
        }
    }
    fclose($fp);
}
?>