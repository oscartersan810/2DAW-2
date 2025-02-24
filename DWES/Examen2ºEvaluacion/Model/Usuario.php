<?php
require_once '../Model/ClasesDB.php';
class Usuario {
    private $id;
    private $nombre;
    private $clave;
    private $perfil;

    function __construct($id=0, $nombre="", $clave="", $perfil="") {
        $this->id = $id;	
        $this->nombre = $nombre;
        $this->clave = $clave;
        $this->perfil= $perfil;
    }

    //No son necesarios en nuestra aplicación
    // public function insert() {
    //     $conexion = ClasesDB::connectDB();
    //     $insercion = "INSERT INTO usuario (nombre, clave, perfil) 
    //                     VALUES ('$this->nombre', '$this->clave',now())";
    //     $conexion->exec($insercion);
    // }
    // public function delete() {
    //     $conexion = ClasesDB::connectDB();
    //     $borrado = "DELETE FROM usuario WHERE id='$this->id'";
    //     $conexion->exec($borrado);
    // }

    public static function getUsuarios() {
        $conexion = ClasesDB::connectDB();
        $seleccion = "SELECT * FROM usuario";
        $consulta = $conexion->query($seleccion);
        $usuarios = [];
        while ($registro = $consulta->fetchObject()) {
            $usuarios[] = new Usuario($registro->id, $registro->nombre, $registro->clave, $registro->perfil);
        }
        return $usuarios;
    }
    public static function getUsuarioById($id) {
        $conexion = ClasesDB::connectDB();
        $seleccion = "SELECT * FROM usuario WHERE id=$id";
        $consulta = $conexion->query($seleccion);
        if ($consulta->rowCount()>0) {
            $registro = $consulta->fetchObject();
            $usuario = new Usuario($registro->id, $registro->nombre, $registro->clave, $registro->perfil);
            return $usuario;
        }else {
            return false;
        }
    }

    public static function getUsuarioByNombre($nombre){
        $conexion = ClasesDB::connectDB();
        $seleccion = "SELECT * FROM usuario WHERE nombre=$nombre";
        $consulta = $conexion->query($seleccion);
        if ($consulta->rowCount()>0) {
            $registro = $consulta->fetchObject();
            $usuario = new Usuario($registro->id, $registro->nombre, $registro->clave, $registro->perfil);
            return $usuario;
        } else{
            return false;
        }
        
        
        // while ($registro = $consulta->fetchObject()) {
        //     $usuario[] = new Usuario($registro->id, $registro->nombre, $registro->clave, $registro->perfil);
        // }
    }

    // public static function getEstudianteByLogin($nombre, $clave){
    //     $conexion = ClasesDB::connectDB();
    //     $seleccion = "SELECT * FROM usuario WHERE nombre=$nombre AND clave=$clave";
    //     $consulta = $conexion->query($seleccion);
    //     if ($consulta->rowCount()>0) {
    //         $registro=$consulta->fetchObject();
    //         return new Usuario($registro->id, $registro->nombre, $registro->clave, $registro->perfil);;
    //     } else{
    //         return false;
    //     }
    // }

    public static function getProfesores(){
        $conexion = ClasesDB::connectDB();
        $seleccion = "SELECT * FROM usuario WHERE perfil='profesor'";
        $consulta = $conexion->query($seleccion);
        $profesores = [];
        while ($registro = $consulta->fetchObject()) {
            $profesores[] = new Usuario($registro->id, $registro->nombre, $registro->clave, $registro->perfil);
        }
        return $profesores;
    }
    
    public function getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getClave()
    {
        return $this->clave;
    }
    public function getPerfil()
    {
        return $this->perfil;
    }
}