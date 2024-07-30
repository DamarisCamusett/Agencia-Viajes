<?php
// Simulación de ofertas y notificación
$ofertas = array(
    "Descuento del 20% en vuelos a París",
    "Paquete de hotel + vuelo a Japón por $500000",
    "Últimas plazas disponibles para Tokyo con un 15% de descuento"
);

// Para seleccionar una oferta de forma aleatoria
$oferta_aleatoria = $ofertas[array_rand($ofertas)];

// Para poder generar notificación emergente
echo '<script>';
echo 'alert("¡Oferta especial disponible! ' . $oferta_aleatoria . '")';
echo '</script>';
?>
