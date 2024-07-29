<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Semana6/style.css">
    <title>Formulario de Registro de Hoteles</title>
    <script src="/Semana6/validarFormularioHotel.js"></script>  
</head>
<body>
    <h1>Registro de Hoteles</h1>
    <form action="procesar_registro_hotel.php" method="post" onsubmit="return validarFormularioHotel()">
        <label for="nombreHotel">Nombre del Hotel:</label>
        <input type="text" id="nombreHotel" name="nombreHotel" required><br><br>

        <label for="ubicacion">Ubicación (Ciudad, País):</label>
        <input type="text" id="ubicacion" name="ubicacion" required><br><br>

        <label for="habitacionesDisponibles">Habitaciones Disponibles:</label>
        <input type="number" id="habitacionesDisponibles" name="habitacionesDisponibles" min="1" required><br><br>

        <label for="tarifaNoche">Tarifa por Noche:</label>
        <input type="number" id="tarifaNoche" name="tarifaNoche" step="0.01" required><br><br>

        <button type="submit">Registrar Hotel</button>
    </form>
</body>
</html>
