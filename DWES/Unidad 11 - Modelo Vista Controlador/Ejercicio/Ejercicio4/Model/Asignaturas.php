<?php
class Asignaturas{
    private $codigo;
    private $nombre;

    public function __construct($codigo=0, $nombre=""){
        $this->codigo = $codigo;
        $this->nombre = $nombre;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function insert(){
        $conexion = CentroDB::connectDB();
        $insert = "INSERT INTO asignaturas (codigo, nombre) VALUES ('$this->codigo', '$this->nombre')";
        $conexion->exec($insert);
    }

    public function delete(){
        $conexion = CentroDB::connectDB();
        $delete = "DELETE FROM asignaturas WHERE codigo='$this->codigo'";
        $conexion->exec($delete);
    }

    public static function getAsignaturas(){
        $conexion = CentroDB::connectDB();
        $seleccion = "SELECT codigo, nombre FROM asignaturas";
        $consulta = $conexion->query($seleccion);
        $asignaturas = [];
        while ($registro = $consulta->fetchObject()) {
            $asignaturas[] = new Asignaturas($registro->codigo, $registro->nombre);
        }
        return $asignaturas;
    }
} 
?>