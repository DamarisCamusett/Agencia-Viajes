<?php
require_once 'conexionDB.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fechaVuelo = $_POST['fechaVuelo'];
    $plazasDisponibles = $_POST['plazasDisponibles'];
    $precio = $_POST['precio'];

    $sql = "INSERT INTO vuelo (origen, destino, fecha, plazas_disponibles, precio) VALUES (:origen, :destino, :fechaVuelo, :plazasDisponibles, :precio)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':origen' => $origen,
            ':destino' => $destino,
            ':fechaVuelo' => $fechaVuelo,
            ':plazasDisponibles' => $plazasDisponibles,
            ':precio' => $precio
        ]);
        $registroExitoso = true;
    } catch (PDOException $e) {
        echo "Error al registrar el vuelo: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Semana6/style.css">
    <title>Resultado de Registro de Vuelos</title>
</head>
<body>
    <div>
        <?php
        if (isset($registroExitoso) && $registroExitoso) {
            echo "<h1>Vuelo registrado exitosamente.</h1>";
            echo "Origen: $origen<br>";
            echo "Destino: $destino<br>";
            echo "Fecha de Vuelo: $fechaVuelo<br>";
            echo "Plazas Disponibles: $plazasDisponibles<br>";
            echo "Precio: $precio<br>";
        } else {
            echo "<h2>No se ha enviado ningún formulario o ha ocurrido un error en el registro.</h2>";
        }
        ?>
    </div>
</body>
</html>
