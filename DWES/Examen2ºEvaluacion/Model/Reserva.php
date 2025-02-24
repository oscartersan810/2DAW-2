<?php
require_once '../Model/ClasesDB.php';
class Reserva {
    private $estudiante;
    private $profesor;
    private $fecha;
    private $hora;
    private $materia;

    function __construct($estudiante=0, $profesor=0, $fecha="", $hora=0, $materia="") {
        $this->estudiante = $estudiante;	
        $this->profesor = $profesor;
        $this->fecha = $fecha;
        $this->hora= $hora;
        $this->materia= $materia;
    }

    public function insert() {
        $conexion = ClasesDB::connectDB();
        $insercion = "INSERT INTO reserva (estudiante, profesor, fecha, hora, materia) 
                        VALUES ($this->estudiante, $this->profesor, '$this->fecha', $this->hora, '$this->materia')";
        $conexion->exec($insercion);
    }
    public function delete() {
        $conexion = ClasesDB::connectDB();
        $borrado = "DELETE FROM reserva WHERE estudiante='$this->estudiante' AND profesor='$this->profesor' AND fecha='$this->fecha'";
        $conexion->exec($borrado);
    }
    public function update() {
        $conexion = ClasesDB::connectDB();
        $update = "UPDATE reserva SET hora=$this->hora, materia='$this->materia' WHERE estudiante='$this->estudiante' AND profesor='$this->profesor' AND fecha='$this->fecha'";
        $conexion->exec($update);
    }

    public static function getReservaById($estudiante, $profesor, $fecha) {
        $conexion = ClasesDB::connectDB();
        $seleccion = "SELECT * FROM reserva WHERE estudiante=$estudiante AND profesor=$profesor AND fecha='$fecha'";
        $consulta = $conexion->query($seleccion);
        if ($consulta->rowCount()>0) {
            $registro = $consulta->fetchObject();
            $reserva=new reserva($registro->estudiante, $registro->profesor, $registro->fecha, $registro->hora);
            return $reserva;
        }else {
            return false;
        }
    }

    public static function getReservasByEstudiante($idEstudiante){
        $conexion = ClasesDB::connectDB();
        $seleccion = "SELECT profesor, fecha, hora, materia FROM reserva WHERE estudiante=$idEstudiante";
        $consulta = $conexion->query($seleccion);
        $reservasEstudiante = [];
        while ($registro = $consulta->fetchObject()) {
            $reservasEstudiante[] = new Reserva($registro->estudiante, $registro->profesor, $registro->fecha, $registro->hora, $registro->materia);
        }
        return $reservasEstudiante;
    }
    
    public static function getReservaLibre($idProfesor, $fecha, $hora){
        $conexion = ClasesDB::connectDB();
        $seleccion = "SELECT * FROM reserva WHERE profesor=$idProfesor AND fecha=$fecha AND hora='$hora'";
        $consulta = $conexion->query($seleccion);
        if ($consulta->rowCount()>0) {
            $registro = $consulta->fetchObject();
            $reserva=new reserva($registro->estudiante, $registro->profesor, $registro->fecha, $registro->hora);
            return $reserva;
        }else {
            return false;
        }
    }

    public function getProfesor()
    {
        return $this->profesor;
    }
    public function getEstudiante()
    {
        return $this->estudiante;
    }
    public function getFecha()
    {
        return date("d/m/Y", strtotime($this->fecha));
    }    
    public function getHora()
    {
        return $this->hora;
    }
    public function getMateria()
    {
        return $this->materia;
    }
    public function setHora($hora)
    {
        $this->hora = $hora;
    }
    public function setMateria($materia)
    {
        $this->materia = $materia;
    }
}