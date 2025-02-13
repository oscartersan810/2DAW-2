<?php
include_once "Vehiculo.php";

class Bicicleta extends Vehiculo{
    
    public function hacerCaballito(): string{
        $frase = "Haciendo el caballito con la bicicleta";
        return $frase;
    }
}
?>