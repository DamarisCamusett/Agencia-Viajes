<?php
class FiltroViaje {
    // Variables
    private $nombreHotel;
    private $ciudad;
    private $pais;
    private $fechaViaje;
    private $duracion;
    // Constructor
    public function __construct($nombreHotel, $ciudad, $pais, $fechaViaje, $duracion) {
        $this->nombreHotel = $nombreHotel;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
        $this->fechaViaje = $fechaViaje;
        $this->duracion = $duracion;
    }
    // Para obtener la ciudad de destino
    public function getCiudad() {
        return $this->ciudad;
    }
    // Para obtener el país del destino
    public function getPais() {
        return $this->pais;
    }
    // Para obtener la fecha de viaje
    public function getFechaViaje() {
        return $this->fechaViaje;
    }
    // Para obtener la duración del viaje
    public function getDuracion() {
        return $this->duracion;
    }
    // Para verificar si el destino coincide con la búsqueda
    public function coincideConBusqueda($ciudad, $pais, $fechaInicio, $fechaFin) {
        return $this->ciudad == $ciudad &&
               $this->pais == $pais &&
               strtotime($this->fechaViaje) >= strtotime($fechaInicio) &&
               strtotime($this->fechaViaje) <= strtotime($fechaFin);
    }
}


// Ejemplo de uso
$filtro1 = new FiltroViaje("Hotel Ejemplo", "Madrid", "España", "2024-08-15", 7);
$filtro2 = new FiltroViaje("Otro Hotel", "París", "Francia", "2024-09-20", 5);

// Ejemplo de búsqueda personalizada
$ciudadBusqueda = "Madrid";
$paisBusqueda = "España";
$fechaInicioBusqueda = "2024-08-10";
$fechaFinBusqueda = "2024-08-20";

if ($filtro1->coincideConBusqueda($ciudadBusqueda, $paisBusqueda, $fechaInicioBusqueda, $fechaFinBusqueda)) {
    echo "Se encontró un destino que coincide con la búsqueda: " . $filtro1->getCiudad() . ", " . $filtro1->getPais() . " - Fecha: " . $filtro1->getFechaViaje();
} else {
    echo "No se encontraron destinos que coincidan con la búsqueda.";
}
?>
