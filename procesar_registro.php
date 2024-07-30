<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Semana4 PHP/style.css">
    <title>Formulario de Registro de Destinos y Fechas de Viaje</title>
</head>
<body>
    <div>
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
            // Para obtener el nombre del hotel
            public function getNombreHotel() {
                return $this->nombreHotel;
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
        // Método para mostrar los detalles del viaje
            public function mostrarDetalles() {
                echo "<h1>Detalles del viaje registrado:</h1>";
                echo "Nombre del Hotel: " . $this->getNombreHotel() . "<br>";
                echo "Ciudad: " . $this->getCiudad() . "<br>";
                echo "País: " . $this->getPais() . "<br>";
                echo "Fecha de Viaje: " . $this->getFechaViaje() . "<br>";
                echo "Duración del Viaje: " . $this->getDuracion() . " días<br>";
            }
        }
        // Verificar si el formulario ha sido enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener datos del formulario
            $nombreHotel = $_POST['nombreHotel'];
            $ciudad = $_POST['ciudad'];
            $pais = $_POST['pais'];
            $fechaViaje = $_POST['fechaViaje'];
            $duracion = $_POST['duracion'];
            // Crear una nueva instancia de FiltroViaje
            $nuevoViaje = new FiltroViaje($nombreHotel, $ciudad, $pais, $fechaViaje, $duracion);
            // Mostrar los detalles del viaje
            $nuevoViaje->mostrarDetalles();
        } else {
            echo "<h2>No se ha enviado ningún formulario.</h2>";
        }
        ?>
    </div>
</body>
</html>