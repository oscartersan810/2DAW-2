<?php
class Componentes{
    public int $id;
    public string $nombre;
    public string $descripcion;
    public string $imagen;

    function __construct($id, $nombre, $descripcion, $imagen){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
    }

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function __toString(){
        return $this->id . " " . $this->nombre . " " . $this->descripcion . " " . $this->imagen;
    }
} 
?>