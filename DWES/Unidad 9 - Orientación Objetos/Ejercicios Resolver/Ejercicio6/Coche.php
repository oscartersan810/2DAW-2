<?php 
include_once "Vehiculo.php";

class Coche extends Vehiculo{

    public function quemarRueda(){
        $frase = "Quemando rueda...";
        return $frase;
    }
}
?>