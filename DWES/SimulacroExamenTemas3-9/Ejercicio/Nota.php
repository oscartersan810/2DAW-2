<?php
class Nota{
    private $titulo;
    private $texto;
    private $creacion;
    private static $ultima = null;
    private static $fecha = null;


    public function __construct($titulo, $texto){
        $this->titulo = $titulo;
        $this->texto = $texto;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getTexto(){
        return $this->texto;
    }

    public function getCreacion(){
        return date('Y-m-d H:i:s', $this->creacion);
    }

    public static function getUltima(){
        return self::$ultima;
    }

    public static function getFecha(){
        return date('Y-m-d H:i:s', self::$fecha);
    }
} 
?>