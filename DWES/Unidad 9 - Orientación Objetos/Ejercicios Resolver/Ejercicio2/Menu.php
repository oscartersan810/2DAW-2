<?php
class Menu {
    private $titulo = [];
    private $enlace = [];

    public function __construct() {

    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getEnlace() {
        return $this->enlace;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setEnlace($enlace) {
        $this->enlace = $enlace;
    }

    public function addMenu($titulo, $enlace) {
        $this->titulo[] = $titulo;
        $this->enlace[] = $enlace;
    }

    public function mostrarHorizontal(){
        $estilo = "inline";
        echo "<ul>";
        for ($i=0; $i < count($this->titulo) ; $i++) { 
            echo "<li><a href='".$this->enlace[$i]."' style='display: ".$estilo.";'>".$this-> titulo[$i]."</a></li>";
        }
        echo "</ul>";
    }

    public function mostrarVertical(){
        $estilo = "block";
        echo "<ul>";
        for ($i=0; $i < count($this->titulo) ; $i++){
            echo "<li><a href='".$this->enlace[$i]."' style='display: ".$estilo.";'>".$this->titulo[$i]."</a></li>";
        }
    }


    public function __toString() {
        return "Menu [titulo=$this->titulo, enlace=$this->enlace";
    }
} 
?>