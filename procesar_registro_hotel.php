<?php
require_once 'conexionDB.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreHotel = $_POST['nombreHotel'];
    $ubicacion = $_POST['ubicacion'];
    $habitacionesDisponibles = $_POST['habitacionesDisponibles'];
    $tarifaNoche = $_POST['tarifaNoche'];

    $sql = "INSERT INTO hotel (nombre, ubicacion, habitaciones_disponibles, tarifa_noche) VALUES (:nombreHotel, :ubicacion, :habitacionesDisponibles, :tarifaNoche)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':nombreHotel' => $nombreHotel,
            ':ubicacion' => $ubicacion,
            ':habitacionesDisponibles' => $habitacionesDisponibles,
            ':tarifaNoche' => $tarifaNoche
        ]);
        $registroExitoso = true;
    } catch (PDOException $e) {
        echo "Error al registrar el hotel: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Semana6/style.css">
    <title>Resultado de Registro de Hoteles</title>
</head>
<body>
    <div>
        <?php
        if (isset($registroExitoso) && $registroExitoso) {
            echo "<h1>Hotel registrado exitosamente.</h1>";
            echo "Nombre del Hotel: $nombreHotel<br>";
            echo "Ubicación: $ubicacion<br>";
            echo "Habitaciones Disponibles: $habitacionesDisponibles<br>";
            echo "Tarifa por Noche: $tarifaNoche<br>";
        } else {
            echo "<h2>No se ha enviado ningún formulario o ha ocurrido un error en el registro.</h2>";
        }
        ?>
    </div>
</body>
</html>
