<?php
session_start();
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [];
}
class Factura{
    private static $IVA = 21;
    private $importeBase = 0;
    private $fecha;

    private $estado;
    private $productos = [];

    public function __construct(){
        $this->productos = $_SESSION['productos'];
    }

    public function AnadeProducto($nombre, $precio, $cantidad){
        $this->productos[] = ['Nombre'=> $nombre, 'Precio' => $precio, 'Cantidad' => $cantidad];
        $_SESSION['productos'] = $this->productos;
    }

    private function calculaImporteBase()  {
        $ib = $this->importeBase;
        foreach ($this->productos as $producto) {
            $ib += $producto['Precio'] * $producto['Cantidad'];
        }
        return $ib;
    }

    public function imprimeFactura() {
        $importeBase = $this->calculaImporteBase();
        $iva = $importeBase * (self::$IVA / 100);
        $total = $importeBase + $iva;

        echo "<h2>Factura</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>";
        foreach ($this->productos as $producto) {
            echo "<tr>
                    <td>{$producto['Nombre']}</td>
                    <td>{$producto['Precio']}€</td>
                    <td>{$producto['Cantidad']}</td>
                    <td>" . ($producto['Precio'] * $producto['Cantidad']) . "€</td>
                  </tr>";
        }
        echo "</table>";
        echo "<p>Importe Base: {$importeBase}€</p>";
        echo "<p>IVA (" . self::$IVA . "%): {$iva}€</p>";
        echo "<p><strong>Total: {$total}€</strong></p>";
    }

    public function getImporteBase() {
        return $this->calculaImporteBase();
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }
} 
?>