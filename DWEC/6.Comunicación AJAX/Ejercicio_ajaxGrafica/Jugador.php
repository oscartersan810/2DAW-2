<?php
class Jugador{
    public int $id;
    public string $nombre;
    public string $apellidos;
    public int $partidas_ganadas;

    public function __construct($id, $nombre, $apellidos, $partidas_ganadas){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->partidas_ganadas = $partidas_ganadas;
    }

    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getPartidasGanadas(){
        return $this->partidas_ganadas;
    }
	
} 
?>