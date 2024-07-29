<?php
require_once 'conexionDB.php';
     
// Consulta SQL para obtener los hoteles con más de dos reservas
$sql = "SELECT h.nombre AS nombre_hotel, COUNT(r.id_reserva) AS num_reservas
        FROM reserva r
        JOIN hotel h ON r.id_hotel = h.id_hotel
        GROUP BY r.id_hotel
        HAVING COUNT(r.id_reserva) > 2";

$stmt = $pdo->query($sql);
$hoteles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Semana6/style.css">
    <title>Hoteles con más de dos reservas</title>
</head>
<body>
    <h1>Hoteles con más de dos reservas</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre del Hotel</th>
                <th>Número de Reservas</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hoteles as $hotel): ?>
                <tr>
                    <td><?php echo htmlspecialchars($hotel['nombre_hotel']); ?></td>
                    <td><?php echo htmlspecialchars($hotel['num_reservas']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
