<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Semana4 PHP/style.css">
    <title>Formulario de Registro de Destinos y Fechas de Viaje</title>
</head>
<body>
    <h1>Registro de Destino</h1>
    <form action="procesar_registro.php" method="post">
        <label for="nombreHotel">Nombre del Hotel:</label>
        <input type="text" id="nombreHotel" name="nombreHotel" required><br><br>

        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required><br><br>

        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" required><br><br>

        <label for="fechaViaje">Fecha de Viaje:</label>
        <input type="date" id="fechaViaje" name="fechaViaje" required><br><br>

        <label for="duracion">Duración del Viaje (en días):</label>
        <input type="number" id="duracion" name="duracion" min="1" required><br><br>

        <button type="submit">Registrar Destino</button>
    </form>
</body>
</html>
