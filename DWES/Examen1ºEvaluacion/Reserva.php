<?php
session_start();
if (!isset($_SESSION['totalPendientes'])) {
    $_SESSION['totalPendientes'] = 0;
}
class Reserva{

    private static $totalPendientes = 0;
    private $usuario;
    private $fechaHora;
    private $sala;
    private $estado;


    public function __construct($usuario, $fechaHora, $sala){
        $this->usuario = $usuario;
        $this->fechaHora = $fechaHora;
        $this->sala = $sala;
        $this->estado = "PENDIENTE";

        self::$totalPendientes = $_SESSION['totalPendientes'];

        if ($this->estado == "PENDIENTE") {
            self::$totalPendientes++;
            $_SESSION['totalPendientes'] = self::$totalPendientes;
        }

    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function getSala(){
        return $this->sala;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function getFecha(){
        // $fechadate = explode(" ", $this->fechaHora);
        // $date = explode("/", $fechadate[0]);
        $dia = date("d", strtotime($this->fechaHora));
        $mes = date("m", strtotime($this->fechaHora));
        $anio = date("Y", strtotime($this->fechaHora));

        return "$dia/$mes/$anio";
    }

    public function getHora(){
        // $fechadate = explode(" ", $this->fechaHora);
        // $horas = explode(":", $fechadate[1]);
        $hora = date("H", strtotime($this->fechaHora));
        $minutos = date("i", strtotime($this->fechaHora));

        return "$hora:$minutos";
    }

    public function confirmar(){
        $this->estado = "CONFIRMADA";
        return $this->estado;
    }
    public function anular(){
        $this->estado = "ANULADA";
        return $this->estado;
    }

    public static function getTotalPendientes(){
        return self::$totalPendientes;
    }

    public static function setTotalPendientes($pendientes){
        self::$totalPendientes = $pendientes;
    }
} 
?>