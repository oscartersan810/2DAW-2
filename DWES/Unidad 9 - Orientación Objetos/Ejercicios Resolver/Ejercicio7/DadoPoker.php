<?php 
session_start();
if (!isset($_SESSION['tiradasTotales'])) {
    $_SESSION['tiradasTotales'] = 0;
}
class DadoPoker{
    private $figuras = ["AS", "K", "Q", "J", "7", "8"];
    private $ultimaTirada = [];
    private $tiradasTotales;
    public function __construct(){
        $this->tiradasTotales = $_SESSION['tiradasTotales'];
        $this->tiradasTotales++;
        $_SESSION['tiradasTotales'] = $this->tiradasTotales;
    }

    public function tira($n){
        for ($i=0; $i<=$n; $i++) { 
            $this->ultimaTirada[$i] = $this->figuras[rand(0, 5)];
        }
    }

    public function nombreFigura(){
        return "La última figura es ".$this->ultimaTirada[5];
    }

    public function getTiradasTotales(){
        return $this->tiradasTotales;
    }

    public function getUltimaTirada(){
        return $this->ultimaTirada;
    }
}
?>