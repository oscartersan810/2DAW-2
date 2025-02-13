<?php
class Cubo{
    private $capacidad;
    private $contenido;

    public function __construct($capacidad, $contenido){
        $this->capacidad = $capacidad;
        $this->contenido = $contenido;
    }

    public function getCapacidad(){
        return $this->capacidad;
    }

    public function getContenido(){
        return $this->contenido;
    }

    public function setCapacidad($capacidad){
        $this->capacidad = $capacidad;
    }

    public function setContenido($contenido){
        $this->contenido = $contenido;
    }

    public function verter($cubo1){
        if (($cubo1->getContenido()) >= ($this->capacidad - $this->contenido)) {
            $this->contenido = $this->capacidad;
            $cubo1->contenido -=($this->capacidad - $this->contenido);
        } else{
            $this->contenido += $cubo1->contenido;
            $cubo1->contenido = 0;
        }
    }
    public function __tostring(){
        return "Cubo con capacidad de $this->capacidad y contenido de $this->contenido";
    }
} 
?>