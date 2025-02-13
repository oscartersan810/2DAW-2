<?php
require_once 'BlogDB.php';

class Articulo{
    private $id;
    private $titulo;

    private $fecha;

    private $contenido;

    function __construct($id="", $titulo="", $fecha="", $contenido=""){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->fecha = $fecha;
        $this->contenido = $contenido;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getContenido(){
        return $this->contenido;
    }

    public function insert(){
        $conexion = BlogDB::connectDB();
        $insercion = "INSERT INTO articulo (titulo, fecha, contenido) VALUES ('$this->titulo', '$this->fecha', '$this->contenido')";
        $conexion->exec($insercion);
    }

    public function delete(){
        $conexion = BlogDB::connectDB();
        $borrado = "DELETE FROM articulo WHERE id='$this->id'";
        $conexion->exec($borrado);
    }

    public static function getOfertas(){
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT * FROM articulo";
        $consulta = $conexion->query($seleccion);
        $articulos = [];
        while ($fila = $consulta->fetch()) {
            $articulos[] = new Oferta($fila['id'], $fila['titulo'], $fila['fecha'], $fila['contenido']);
        }
        return $articulos;
    }
    

    public static function getOfertaById($id){
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT id, titulo, fecha, contenido FROM articulo WHERE id='$id'";
        $consulta = $conexion->query($seleccion);

        if ($consulta->rowCount() > 0){
            $registro = $consulta->fetchObject();
            $oferta = new Articulo($registro->titulo, $registro->fecha, $registro->contenido);
            return $oferta;
        } else {
            return false;
        }
    }
}
?>