<?php
require_once 'CentroDB.php';
class Alumnos{
    private $matricula;
    private $nombre;
    private $apellidos;

    private $curso;

    public function __construct($matricula="", $nombre="", $apellidos="", $curso=""){
        $this->matricula = $matricula;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->curso = $curso;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function insert(){
        $conexion = CentroDB::connectDB();
        $insert = "INSERT INTO alumnos (matricula, nombre, apellidos, curso) VALUES ('$this->matricula', '$this->nombre', '$this->apellidos', '$this->curso')";
        $conexion->exec($insert);
    }

    public function delete(){
        $conexion = CentroDB::connectDB();
        $delete = "DELETE FROM alumnos WHERE matricula='$this->matricula'";
        $conexion->exec($delete);
    }

    public function update(){
        $conexion = CentroDB::connectDB();
        $update = "UPDATE alumnos SET nombre = '$this->nombre', apellidos='$this->apellidos', curso='$this->curso' WHERE matricula='$this->matricula'";
        $conexion->exec($update);
    }

    public static function getAlumnos(){
        $conexion = CentroDB::connectDB();
        $seleccion = "SELECT matricula, nombre, apellidos, curso FROM alumnos";
        $consulta = $conexion->query($seleccion);
        $alumnos = [];
        while ($registro = $consulta->fetchObject()) {
            $alumnos[] = new Alumnos($registro->matricula, $registro->nombre, $registro->apellidos, $registro->curso);
        }
        return $alumnos;
    }

    public static function getAlumnosByMatricula($matricula) {
        $conexion = CentroDB::connectDB();
        $seleccion = "SELECT matricula, nombre, apellidos, curso FROM alumnos WHERE matricula = '$matricula'";
        $consulta = $conexion->query($seleccion);
        if ($consulta->rowCount()>0) {
          $registro = $consulta->fetchObject();
          $alumno = new Alumnos($registro->matricula, $registro->nombre, $registro->apellidos, $registro->curso); 
          return $alumno;    
        }else{
          return false;
        }
      }
} 
?>