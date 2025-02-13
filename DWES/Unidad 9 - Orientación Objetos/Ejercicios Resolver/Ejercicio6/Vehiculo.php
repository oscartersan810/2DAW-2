<?php
session_start();

// Inicializar la variable de sesión si no existe
if (!isset($_SESSION['vehiculos'])) {
    $_SESSION['vehiculos'] = 0; // Inicializa a 0 si no existe
}

class Vehiculo {
    private static $vehiculosCreados = 0; // Propiedad estática para llevar la cuenta
    private static $kilometrosTotales = 0; // Propiedad estática para los kilómetros totales
    private $kilometrosRecorridos; // Propiedad de instancia

    public function __construct() {
        // Sincroniza los vehículos creados con la sesión
        self::$vehiculosCreados = $_SESSION['vehiculos'];
        self::$vehiculosCreados++; // Incrementar el contador
        $_SESSION['vehiculos'] = self::$vehiculosCreados; // Guardar en la sesión
    }

    public static function getVehiculosCreados() {
        return self::$vehiculosCreados;
    }

    public static function getKilometrosTotales() {
        return self::$kilometrosTotales;
    }

    public function getKilometrosRecorridos() {
        return $this->kilometrosRecorridos;
    }

    public function anda($km) {
        if ($km > 0) {
            $this->kilometrosRecorridos += $km;
            self::$kilometrosTotales += $km; // Incrementar kilómetros totales
        }
    }
}
?>

