<?php
require_once 'FotografiasDB.php';
require_once 'Usuario.php';
require_once 'Foto.php';

class Like {
    private $id_foto;
    private $id_usuario;

    function __construct($id_foto=0, $id_usuario=0) {
        $this->id_foto = $id_foto;
        $this->id_usuario = $id_usuario;    
    }

    public function insert() {
        $conexion = FotografiasDB::connectDB();
        $insercion = "INSERT INTO likes (id_foto, id_usuario) VALUES ($this->id_foto, $this->id_usuario)";
        $conexion->exec($insercion);
    }

    public function delete() {
        $conexion = FotografiasDB::connectDB();
        $borrado = "DELETE FROM likes WHERE id_foto=$this->id_foto AND id_usuario=$this->id_usuario";
        $conexion->exec($borrado);
    }

    public static function getLikeByFotos($id_foto) {
        $conexion = FotografiasDB::connectDB();
        $seleccion = "SELECT * FROM likes WHERE id_foto=$id_foto";
        $consulta = $conexion->query($seleccion);
        $likes = [];
        while ($registro = $consulta->fetchObject()) {
            $likes[] = new Like($registro->id_foto, $registro->id_usuario);
        }
        return $likes;
    }

    public static function exists($id_foto, $id_usuario) {
        $conexion = FotografiasDB::connectDB();
        $seleccion = "SELECT * FROM likes WHERE id_foto=$id_foto AND id_usuario=$id_usuario";
        $consulta = $conexion->query($seleccion);
        return $consulta->rowCount() > 0;
    }

    public function getId_foto() {
        return $this->id_foto;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }
}