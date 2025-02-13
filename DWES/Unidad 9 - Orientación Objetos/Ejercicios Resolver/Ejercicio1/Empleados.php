<?php
class Empleados{
    private $nombre;
    private $sueldo;

    public function __construct($nombre, $sueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getSueldo(){
        return $this->sueldo;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setSueldo($sueldo){
        $this->sueldo = $sueldo;
    }

    //Funciones adicionales Ejercicio
    public function asigna($nombre, $sueldo){
       if ($this->nombre = $nombre) {
            $this->sueldo = $sueldo;
       }   
    }

    public function impuestos(){
        if ($this->sueldo > 3000) {
            return "El Empleado ".$this->nombre. " SI tiene que pagar impuestos";
        } else{
            return "El Empleado ".$this->nombre. " NO tiene que pagar impuestos";
        }
    } 

    public function __tostring(){
        return "Nombre: $this->nombre, Sueldo: $this->sueldo €";
    }


} 
?>